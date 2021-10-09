document.addEventListener("DOMContentLoaded", initialize);


function initialize(){
    // initialize a dictionary with Business -> [[Name, ID]]
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


        finalEmployeeData = []
        // transform data for every employee
        for (rawDataIndex = 0; rawDataIndex < cleanEmployeeData.length; rawDataIndex ++){
            rawData = cleanEmployeeData[rawDataIndex];

            // split Name;ID;Halt/Home;StartDate;EndDate
            splitToParts = rawData.split(';');


            // make a dict for this employee
            employeeDataAsDict = {}

            // insert the data to the dict
            employeeDataAsDict['name'] = splitToParts[0];
            employeeDataAsDict['id'] = splitToParts[1];
            employeeDataAsDict['dhlwshType'] = splitToParts[2];
            employeeDataAsDict['startDate'] = splitToParts[3];
            employeeDataAsDict['endDate'] = splitToParts[4];


            // push the dict to the list
            finalEmployeeData.push(employeeDataAsDict);

            // put the dict also to the employees dict
            window.employeesDictionary[employeeDataAsDict['id']] = employeeDataAsDict;
        }

        // finally enter the key-value pair to the dictionary
        window.businessDictionary[businessKey] = finalEmployeeData;
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


    

    // finally, populate the table to the left based on the selected business
    updateLeftTable();

    // also, add an event listener so left table is updated whenever selector is changed
    businessSelector.addEventListener('change', updateLeftTable);
}



function updateLeftTable(){
    // we first need to see what bussiness is selected
    businessSelected = document.getElementById('BusinessSelector').value;

    // now, get access to the left table
    availableWorkersTable = document.getElementById('AvailableWorkersTable');

    // also get to the right since we need to filter
    currentArseisTable = document.getElementById('CurrentArseisTable');

    // we need to empty the body first, so get access to it
    tableBody = availableWorkersTable.tBodies[0];

    // empty the table body
    tableBody.innerHTML = '';

    // now, for every employee in business, insert row if same employee not in right table
    // so, get access to employees
    employeeList = businessSelectedToEmployeesList(businessSelected);

    // filter them so no one is to the right table
    filteredEmployeeList = employeeList.filter(entry => !tableHasID(currentArseisTable, entry['id']));

    // now, every one of them must be added to the table
    for (filteredEmployeeIndexToInsert = 0; filteredEmployeeIndexToInsert < filteredEmployeeList.length; filteredEmployeeIndexToInsert++){
        // get name and ID to insert
        employeeDataToInsert = filteredEmployeeList[filteredEmployeeIndexToInsert];

        // insert a row to the table
        var row = availableWorkersTable.tBodies[0].insertRow(0);

        // build the appropriate html in the row
        row.innerHTML = makeLeftRow(employeeDataToInsert['id']);
    }

    // now the table is done!
}



function makeLeftRow(id){

    employeeData = window.employeesDictionary[id];

    // start the name of the employee
    htmlToInsert = '<td style="color: #ffffff;"><small id=\"WorkerName';
    // add ID
    htmlToInsert += employeeData['id'];
    // go on until we need to write the name 
    htmlToInsert += '\" style=\"margin: 12px;font-size: 17px;\">';
    // now add name
    htmlToInsert += employeeData['name'];
    // finish the small tag
    htmlToInsert += '</small>';
    // now see what button we should write
    if (employeeData['dhlwshType'] === 'Home'){
        // put a green home button
        htmlToInsert += '<button class="btn btn-primary bg-success border rounded border-white" data-toggle="tooltip" data-bs-tooltip="" type="button" style="background-color: #00000000;" title="Εργασία εξ\'αποστάσεως" disabled=""><small style="display: none;">koumpi</small><i class="fa fa-home" data-bs-hover-animate="pulse" style="color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;"></i></button>';
    } else {
        // else put a yellow home button
        htmlToInsert += '<button class="btn btn-primary bg-warning border rounded border-white" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" type="submit" style="background-color: #00000000;margin: 0;padding: -25px;margin-left: 0;" title="Αναστολή σύμβασης εργασίας" disabled=""><small style="display: none;">koumpi</small><i class="fa fa-pause" data-bs-hover-animate="pulse" style="color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;"></i></button>';
    }

    // now we must write the start and end date data so user can read it only
    htmlToInsert += '<small style="margin: 12px;font-size: 17px;">Από:</small><label><small style="display: none;">arxh</small><input class="border rounded border-primary" type="date" style="background-color: #282d32;color: #ffffff;" readonly="" value="';
    htmlToInsert += employeeData['startDate'];
    htmlToInsert += '"></label><small style="margin: 12px;font-size: 17px;">Μέχρι:</small><label><small style="display: none;">arxh</small><input class="border rounded border-primary" type="date" style="background-color: #282d32;color: #ffffff;" readonly="" value="';
    htmlToInsert += employeeData['endDate'];
    htmlToInsert += '"></label>';
    
    
    
    // now add the button for the arsh    
    htmlToInsert += '<button id="Arsh' + employeeData['id'] + '"' + 'class="btn btn-secondary float-right" type="button" onclick="handleArsh(event)" style="font-family: Lato, sans-serif;filter: blur(0px) contrast(100%) hue-rotate(0deg) invert(0%) saturate(100%) sepia(0%);">Άρση Δήλωσης</button></td>';
    
    
    return htmlToInsert;
}    

function makeRightRow(id){
    employeeData = window.employeesDictionary[id];



    // we must put the cancel button here
    // start the cancel button
    htmlToInsert = '<td style=\"color: #ffffff;\"><button id=\"ChosenCancel';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // finish the cancel button
    htmlToInsert += '\" class=\"btn btn-danger\" data-placement=\"left\" type=\"button\" onclick=\"handleCancel(event)\" style=\"margin: 0;padding: 1px;\" title=\"Ακύρωση δήλωσης\"><i class=\"fa fa-remove\"></i></button>';

    // start the name of the employee
    htmlToInsert += '<small id=\"WorkerName';
    // add ID
    htmlToInsert += employeeData['id'];
    // go on until we need to write the name 
    htmlToInsert += '\" style=\"margin: 12px;font-size: 25px;\">';
    // now add name
    htmlToInsert += employeeData['name'];
    // finish the small and td tag
    htmlToInsert += '</small></td>';
    

    return htmlToInsert;
}

function handleCancel(event) {
    // get a reference to the button
    target = event.currentTarget;

    // we must now know the ID of the employee, i.e. the number after WorkerHome
    employeeIDAsStr = getEmployeeIDFromTarget(target);

    //get the rows to the right
    currentArseisTable = document.getElementById('CurrentArseisTable');
    //delete the row clicked on
    currentArseisTable.tBodies[0].deleteRow(findRowNumberByButton(currentArseisTable, target));

    // update the left table just in case we canceled an employee of the chosen Business
    updateLeftTable();


    // get access to the arseisForm
    arseisForm = document.getElementById('arseisForm');

    // get access to the value
    arseisValue = arseisForm.value;

    // make a regex that will match ,*;ID;*;*,
    var re = new RegExp(',' + employeeIDAsStr + ',', 'g');

    // remove the entry where the ID exists
    arseisForm.value = arseisValue.replace(re, '');

    console.log('cancel');
};

function handleArsh(event) {
    // get a reference to the button
    target = event.currentTarget;

    // we must create a new home entry in CurrentArseisTable
    currentArseisTable = document.getElementById('CurrentArseisTable');
    // Create an empty <tr> element and add it to the 1st position of the table:
    var row = currentArseisTable.tBodies[0].insertRow(0);


    // we must now know the ID of the employee, i.e. the number after WorkerHome
    employeeIDAsStr = getEmployeeIDFromTarget(target);
    // build the appropriate html in the row
    row.innerHTML = makeRightRow(employeeIDAsStr);


    //get the rows to the left
    availableWorkersTable = document.getElementById('AvailableWorkersTable');
    //delete the row clicked on
    availableWorkersTable.tBodies[0].deleteRow(findRowNumberByButton(availableWorkersTable, target));



    // update arseis
    arseisForm = document.getElementById('arseisForm');


    // just write the ID, that's all we need
    arseisForm.value += ',' + employeeIDAsStr + ',';


    console.log('arsh');
};    




function businessSelectedToEmployeesList(businessSelected){
    result = [];
    if(businessSelected == 'Όλες'){
        // if all businesses
        allBusinesses = Object.keys(window.businessDictionary);

        for (businessIndex = 0; businessIndex < allBusinesses.length; businessIndex++){
            // get current business
            currBusiness = allBusinesses[businessIndex];
            
            // append business employees to result
            result = result.concat(window.businessDictionary[currBusiness]);
        }
    } else {
        // else chose by business
        result = window.businessDictionary[businessSelected];
    }

    return result;
}



function tableHasID(table, ID){
    // get access to the table body
    tableBody = table.tBodies[0];

    // iterate through the rows
    for (var i = 0, row; row = tableBody.rows[i]; i++) {
        //get the actual cell
        cell = row.cells[0];

        //loop through children of array, one should have same employee id as given
        var children = cell.children;

        for (var j = 0; j < children.length; j++) {
            var child = children[j];

            if (getEmployeeIDFromTarget(child) == ID) {
                return true;
            }
        }

    }

    // not found, return false
    return false;
}


function getEmployeeIDFromTarget(target) {
    if(!target.id){
        return '';
    }


    var numberMatches = target.id.match(/(\d+)/);

    if(numberMatches.length > 0){
        return numberMatches[0];
    } else {
        return '';
    }
}


function findRowNumberByButton(table, buttonClicked) {
    //iterate through rows
    for (var i = 0, row; row = table.tBodies[0].rows[i]; i++) {
        //get the actual cell
        cell = row.cells[0];

        //loop through children of array, one should have same id as button clicked
        var children = cell.children;
        for (var j = 0; j < children.length; j++) {
            var child = children[j];
            if (child.id == buttonClicked.id) {
                return i;
            }
        }

    }
}



function checkArseis(){
    arseisForm = document.getElementById('arseisForm');

    result = arseisForm.value != '';
    if (result == false) {
        alert('Δεν έχετε κάνει καμμία άρση!');
    }

    return result;
}

