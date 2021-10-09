document.addEventListener("DOMContentLoaded", initialize);


function initialize(){
    // initialize a dictionary with Business -> [[leftID's], [middleID's], [rightID's]]
    window.businessDictionary = {};

    // also make another dict from ID -> Data for every employee for better access
    window.employeesDictionary = {};

    // we need to read the data that php has sent us to the html
    dataFromPhpTag = document.getElementById('dataFromPhp');

    // get the actual data
    dataFromPhp = dataFromPhpTag.value;


    // we need to split by ! to iterate for businesses
    dirtyBusinesses = dataFromPhp.split('!');

    // some empty slots, remove them
    cleanBusinesses = dirtyBusinesses.filter(entry => !(entry === ''));


    // loop for every entry
    for (cleanEntryIndex = 0; cleanEntryIndex < cleanBusinesses.length; cleanEntryIndex ++){
        
        cleanEntry = cleanBusinesses[cleanEntryIndex]

        // split into key (Business) and value another dict for the employee
        splitEntry = cleanEntry.split(':');
        
        // get the key
        businessKey = splitEntry[0];

        // get the value
        dirtyEmployeesData = splitEntry[1];

        // split it by ,
        dirtyEmployeesData = dirtyEmployeesData.split(',');

        // remove empty entries
        cleanEmployeeData = dirtyEmployeesData.filter(entry => !(entry === ''));


        // by category for easier access
        workingEmployees = [];
        nonWorkingEmployees = [];

        // transform data for every employee
        for (rawDataIndex = 0; rawDataIndex < cleanEmployeeData.length; rawDataIndex ++){
            rawData = cleanEmployeeData[rawDataIndex];

            // split Name;ID;Halt/Home/Child;StartDate;EndDate
            splitToParts = rawData.split(';');

            // make a dict for this employee
            employeeDataAsDict = {}

            // insert the data to the dict
            employeeDataAsDict['name'] = splitToParts[0];
            employeeDataAsDict['id'] = splitToParts[1];
            employeeDataAsDict['dhlwshType'] = splitToParts[2];
            employeeDataAsDict['startDate'] = splitToParts[3];
            employeeDataAsDict['endDate'] = splitToParts[4];


            if(employeeDataAsDict['dhlwshType'] === ''){
                workingEmployees.push(employeeDataAsDict);
            } else {
                nonWorkingEmployees.push(employeeDataAsDict);
            }

            // put the dict also to the employees dict
            window.employeesDictionary[employeeDataAsDict['id']] = employeeDataAsDict;
        }

        // finally enter the key-value pair to the dictionary
        window.businessDictionary[businessKey] = [workingEmployees, nonWorkingEmployees];
    }

    // now we must populate the business selector

    // get access to the businessSelector
    businessSelector = document.getElementById('BusinessSelector');
    
    // add the basic optgroup and option
    htmlToInsert = '<optgroup label="Επιλέξτε επιχείρηση για να δείτε τους εργαζόμενους:"><option value="Όλες" selected="">Όλες</option>';

    // add options for every business
    businessNames = Object.keys(window.businessDictionary);
    for (businessIndex = 0; businessIndex < businessNames.length; businessIndex++){
        currBusinessName = businessNames[businessIndex];
        // add current business as option
        htmlToInsert += '<option value="' + currBusinessName + '">' + currBusinessName + '</option>';
    }

    // finish off the option group
    htmlToInsert += '</optgroup>';


    // lastly insert to select
    businessSelector.innerHTML = htmlToInsert;


    

    // finally, populate the tables
    updateTables();

    // also, add an event listener so tables are updated whenever selector is changed
    businessSelector.addEventListener('change', updateTables);
}


function businessSelectedToEmployeesTriple(businessSelected){
    workResult = [];
    noWorkResult = [];

    if(businessSelected == 'Όλες'){
        // if all businesses
        allBusinesses = Object.keys(window.businessDictionary);

        for (businessIndex = 0; businessIndex < allBusinesses.length; businessIndex++){
            // get current business
            currBusiness = allBusinesses[businessIndex];
            
            // append business employees to results
            workResult = workResult.concat(window.businessDictionary[currBusiness][0]);
            noWorkResult = noWorkResult.concat(window.businessDictionary[currBusiness][1]);

        }
    } else {
        return window.businessDictionary[businessSelected];
    }

    return [workResult, noWorkResult];
}


function updateTables(){
    businessSelected = document.getElementById('BusinessSelector').value;

    // get access to the tables
    workTable = document.getElementById('workTable');
    noWorkTable = document.getElementById('noWorkTable');


    // get the employees to insert to those tables
    employeesTriple = businessSelectedToEmployeesTriple(businessSelected);
    workEmployees = employeesTriple[0];
    noWorkEmployees = employeesTriple[1];

    // actually put them in the tables
    updateTable(workTable, workEmployees, makeWorkRow);
    updateTable(noWorkTable, noWorkEmployees, makeNoWorkRow);
}







function updateTable(table, employees, makeRowFunction){
    // we need to empty the body first, so get access to it
    tableBody = table.tBodies[0];

    // empty the table body
    tableBody.innerHTML = '';

    for (employeeNumber = 0; employeeNumber < employees.length; employeeNumber++){
        // get name and ID to insert
        employeeDataToInsert = employees[employeeNumber];

        // insert a row to the table
        var row = tableBody.insertRow(0);

        // build the appropriate html in the row
        row.innerHTML = makeRowFunction(employeeDataToInsert['id']);
    }
}



function makeNoWorkRow(id){

    employeeData = window.employeesDictionary[id];
    htmlToInsert = '<td style=\"color: #ffffff;\">';

    // we must put a button based on dhlwshType
   
    if(employeeData['dhlwshType'] === 'Home'){
        htmlToInsert += '<button alt="Home" class="btn btn-primary bg-success border rounded border-white" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" type="submit" style="background-color: #00000000;margin: 0;padding: -19px;margin-left: 0;margin-right: 0;" title="Αναστολή σύμβασης εργασίας" disabled=""><small style="display: none;">koumpi</small><i alt="Home" class="fa fa-home" data-bs-hover-animate="pulse" style="color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;"></i></button>'
    } else if (employeeData['dhlwshType'] === 'Halt'){
        htmlToInsert += '<button alt="Halt" class="btn btn-primary bg-warning border rounded border-white" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" type="submit" style="background-color: #00000000;margin: 0;padding: -25px;margin-left: 0;margin-right: 4px;" title="Αναστολή σύμβασης εργασίας" disabled=""><small style="display: none;">koumpi</small><i alt="Halt" class="fa fa-pause" data-bs-hover-animate="pulse" style="color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;"></i></button>'
    } else {
        htmlToInsert += '<button alt="Child" class="btn btn-primary border rounded border-white" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" type="submit" style="background-color: #f2c2c2;margin: 0;padding: -25px;margin-left: 0;margin-right: 4px;" title="Αναστολή σύμβασης εργασίας" disabled=""><small style="display: none;">koumpi</small><i alt="Child" class="fa fa-child" data-bs-hover-animate="pulse" style="color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;"></i></button>'
    }

    // start the name of the employee
    htmlToInsert += '<small style=\"margin: 12px;font-size: 17px;\">';

    htmlToInsert += employeeData['name'];
    // finish the small and td tag
    htmlToInsert += '</small>';

    // now we must write the start and end date data so user can read it only
    htmlToInsert += '<small style="margin: 12px;font-size: 17px;">Από:</small><label><small style="display: none;">arxh</small><input class="border rounded border-primary" type="date" style="background-color: #282d32;color: #ffffff;" readonly="" value="';
    htmlToInsert += employeeData['startDate'];
    htmlToInsert += '"></label><small style="margin: 12px;font-size: 17px;">Μέχρι:</small><label><small style="display: none;">telos</small><input class="border rounded border-primary" type="date" style="background-color: #282d32;color: #ffffff;" readonly="" value="';
    htmlToInsert += employeeData['endDate'];
    htmlToInsert += '"></label></td>';
    
    return htmlToInsert;
}    

function makeWorkRow(id){
    employeeData = window.employeesDictionary[id];
    htmlToInsert = '<td style=\"color: #ffffff;\">';
   
    // start the name of the employee
    htmlToInsert += '<small style=\"margin: 12px;font-size: 17px;\">';

    htmlToInsert += employeeData['name'];
    // finish the small and td tag
    htmlToInsert += '</small></td>';
    
    return htmlToInsert;
}