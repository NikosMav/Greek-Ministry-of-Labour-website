function makeRightHomeRow(IDStr) {
    // start the cancel button
    htmlToInsert = '<td style=\"color: #ffffff;\"><button id=\"ChosenCancel';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // finish the cancel button
    htmlToInsert += '\" class=\"btn btn-danger\" data-placement=\"left\" type=\"button\" onclick=\"handleCancel(event)\" style=\"margin: 0;padding: 1px;\" title=\"Ακύρωση δήλωσης\"><i class=\"fa fa-remove\"></i></button> <small id=\"ChosenName';
    // add ID
    htmlToInsert += employeeIDAsStr;
    // go on until we need to write the name 
    htmlToInsert += '\" style=\"margin: 12px;font-size: 17px;\">';
    // now add name, it can be found by WorkerName + ID
    htmlToInsert += document.getElementById('WorkerName'.concat(employeeIDAsStr)).innerText;
    // keep adding content until we need the ID again
    htmlToInsert += '</small><button class=\"btn btn-primary bg-success border rounded border-white\" type=\"button\" style=\"background-color: #00000000;\" title=\"Εργασία εξ\'αποστάσεως\ " disabled=\"\"><i class=\"fa fa-home\" data-bs-hover-animate=\"pulse\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;\"></i></button><small style=\"margin: 12px;font-size: 17px;\">Από:</small><label><small style="display: none;">arxh</small><input id=\"ChosenStartDate';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // keep going
    htmlToInsert += '\" class=\"border rounded border-primary\" type=\"date\" onchange=\"handleStartDate(event);\" style=\"background-color: #282d32;color: #ffffff;\"></label><small style=\"margin: 12px;font-size: 17px;\">Μέχρι:</small><label><small style="display: none;">telos</small><input id=\"ChosenEndDate';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // finish it
    htmlToInsert += '\" class=\"border rounded border-primary\" type=\"date\" onchange=\"handleEndDate(event);\" style=\"background-color: #282d32;color: #ffffff;\"></label> </td>';

    return htmlToInsert;
}

function handleNewHome(event) {
    // get a reference to the button
    target = event.currentTarget;

    // we must create a new home entry in CurrentDhlwseisTable
    currentDhlwseisTable = document.getElementById('CurrentDhlwseisTable');
    // Create an empty <tr> element and add it to the 1st position of the table:
    var row = currentDhlwseisTable.tBodies[0].insertRow(0);


    // we must now know the ID of the employee, i.e. the number after WorkerHome
    employeeIDAsStr = getEmployeeIDFromTarget(target);
    // build the appropriate html in the row
    row.innerHTML = makeRightHomeRow(employeeIDAsStr);


    //get the rows to the left
    availableWorkersTable = document.getElementById('AvailableWorkersTable');
    //delete the row clicked on
    availableWorkersTable.tBodies[0].deleteRow(findRowNumberByButton(availableWorkersTable, target));



    // update dhlwseis
    dhlwseisForm = document.getElementById('dhlwseisForm');


    // put a comma anyway, who cares
    dhlwseisForm.value += ',Home;';

    // append ID and ;;,
    dhlwseisForm.value += employeeIDAsStr;
    dhlwseisForm.value += ';;,';


    console.log('home');
};


function makeRightHaltRow(IDStr) {
    // start the cancel button
    htmlToInsert = '<td style=\"color: #ffffff;\"><button id=\"ChosenCancel';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // finish the cancel button
    htmlToInsert += '\" class=\"btn btn-danger\" data-placement=\"left\" type=\"button\" onclick=\"handleCancel(event)\" style=\"margin: 0;padding: 1px;\" title=\"Ακύρωση δήλωσης\"><i class=\"fa fa-remove\"></i></button> <small id=\"ChosenName';
    // add ID
    htmlToInsert += employeeIDAsStr;
    // go on until we need to write the name 
    htmlToInsert += '\" style=\"margin: 12px;font-size: 17px;\">';
    // now add name, it can be found by WorkerName + ID
    htmlToInsert += document.getElementById('WorkerName'.concat(employeeIDAsStr)).innerText;
    // keep adding content until we need the ID again
    htmlToInsert += '</small><button class=\"btn btn-primary bg-warning border rounded border-white\" data-placement=\"right\" type=\"button\" style=\"background-color: #00000000;margin: 0;padding: -25px;margin-left: 0px;\"title=\"Αναστολή σύμβασης εργασίας\" disabled><i class=\"fa fa-pause\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;\"></i></button><small style=\"margin: 12px;font-size: 17px;\">Από:</small><label><small style="display: none;">arxh</small><input id=\"ChosenStartDate';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // keep going
    htmlToInsert += '\" class=\"border rounded border-primary\" type=\"date\" onchange=\"handleStartDate(event);\" style=\"background-color: #282d32;color: #ffffff;\"></label><small style=\"margin: 12px;font-size: 17px;\">Μέχρι:</small><label><small style="display: none;">arxh</small><input id=\"ChosenEndDate';
    // add the ID
    htmlToInsert += employeeIDAsStr;
    // finish it
    htmlToInsert += '\"class=\"border rounded border-primary\" type=\"date\" onchange=\"handleEndDate(event);\" style=\"background-color: #282d32;color: #ffffff;\"></label></td>';

    return htmlToInsert;
}


function handleNewHalt(event) {
    // get a reference to the button
    target = event.currentTarget;

    // we must create a new home entry in CurrentDhlwseisTable
    currentDhlwseisTable = document.getElementById('CurrentDhlwseisTable');
    // Create an empty <tr> element and add it to the 1st position of the table:
    var row = currentDhlwseisTable.tBodies[0].insertRow(0);


    // we must now know the ID of the employee, i.e. the number after WorkerHome
    employeeIDAsStr = getEmployeeIDFromTarget(target);
    // build the appropriate html in the row
    row.innerHTML = makeRightHaltRow(employeeIDAsStr);


    //get the rows to the left
    availableWorkersTable = document.getElementById('AvailableWorkersTable');
    //delete the row clicked on
    availableWorkersTable.tBodies[0].deleteRow(findRowNumberByButton(availableWorkersTable, target));



    // update dhlwseis
    dhlwseisForm = document.getElementById('dhlwseisForm');

    // put a comma anyway, who cares
    dhlwseisForm.value += ',Halt;';

    // append ID and ;;,
    dhlwseisForm.value += employeeIDAsStr;
    dhlwseisForm.value += ';;,';


    console.log('halt');
};



function getEmployeeIDFromTarget(target) {
    if(!target.id){
        return '';
    }

    console.log(target.id);

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

function makeLeftRow(Name, IDStr) {
    // add up to WorkerName
    htmlToInsert = '<td style=\"color: #ffffff;\"><small id=\"WorkerName';
    // add ID
    htmlToInsert += IDStr;
    // add up to actual name
    htmlToInsert += '\" style=\"margin: 12px;font-size: 17px;\">';
    // add actual name
    htmlToInsert += Name;
    // add up to WorkerHome
    htmlToInsert += '</small><button id=\"WorkerHome';
    // add ID
    htmlToInsert += IDStr;
    // add up to WorkerHalt
    htmlToInsert += '\" class=\"btn btn-primary bg-success border rounded border-white\" data-placement=\"left\" type=\"button\" onclick=\"handleNewHome(event)\" style=\"background-color: #00000000;\" title=\"Εργασία εξ\'αποστάσεως\"><i class=\"fa fa-home\" data-bs-hover-animate=\"pulse\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;\"></i></button> <button id=\"WorkerHalt';
    // add ID
    htmlToInsert += IDStr;
    // add rest
    htmlToInsert += '\" class=\"btn btn-primary bg-warning border rounded border-white\" data-placement=\"right\" type=\"button\" onclick=\"handleNewHalt(event)\" style=\"background-color: #00000000;margin: 0;padding: -25px;margin-left: 9px;\" title=\"Αναστολή σύμβασης εργασίας\"><i class=\"fa fa-pause\" data-bs-hover-animate=\"pulse\" style=\"color: #f0f9ff;margin: -30px;width: 79px;padding: -47px;height: -89px;\"></i></button></td>';

    return htmlToInsert;
}

function handleCancel(event) {
    // get a reference to the button
    target = event.currentTarget;

    // we must now know the ID of the employee, i.e. the number after WorkerHome
    employeeIDAsStr = getEmployeeIDFromTarget(target);

    //get the rows to the right
    currentDhlwseisTable = document.getElementById('CurrentDhlwseisTable');
    //delete the row clicked on
    currentDhlwseisTable.tBodies[0].deleteRow(findRowNumberByButton(currentDhlwseisTable, target));

    // update the left table just in case we canceled an employee of the chosen Business
    updateLeftTable();

    // get access to the dhlwseisForm
    dhlwseisForm = document.getElementById('dhlwseisForm');

    // get access to the value
    dhlwseisValue = dhlwseisForm.value;

    // make a regex that will match ,*;ID;*;*,
    var re = new RegExp(',[^,]*;' + employeeIDAsStr + ';[^,]*;[^,]*,', 'g');

    // remove the entry where the ID exists
    dhlwseisForm.value = dhlwseisValue.replace(re, '');

    console.log('cancel');
};

function handleStartDate(event) {
    datePicker = event.currentTarget

    // we must update the dhlwseis form to have the date specified
    // get access to dhlwseis 
    dhlwseisForm = document.getElementById('dhlwseisForm');
    // get access to value
    dhlwseisValue = dhlwseisForm.value

    // we must find where the appropriate entry is in the string
    // get ID from target
    employeeIDAsStr = getEmployeeIDFromTarget(datePicker);

    // now find where the entry is in the string
    // make a regex that will match ,*;ID;*;*,
    var re = new RegExp(',[^,]*;' + employeeIDAsStr + ';[^,]*;[^,]*,', 'g');

    // get the actual current entry
    oldEntry = dhlwseisValue.match(re)[0];

    // tokenize the current entry
    oldEntryTokens = oldEntry.split(';');

    // now we must replace whatever is in the startDate slot with the input
    oldEntryTokens[2] = datePicker.value;

    // rejoin the tokens
    newEntry = oldEntryTokens.join(';');

    // replace oldEntry with new
    dhlwseisForm.value = dhlwseisValue.replace(oldEntry, newEntry);


    console.log('startDate');
};


function handleEndDate(event) {
    datePicker = event.currentTarget
        // we must update the dhlwseis form to have the date specified
        // get access to dhlwseis 
    dhlwseisForm = document.getElementById('dhlwseisForm');
    // get access to value
    dhlwseisValue = dhlwseisForm.value

    // we must find where the appropriate entry is in the string
    // get ID from target
    employeeIDAsStr = getEmployeeIDFromTarget(datePicker);

    // now find where the entry is in the string
    // make a regex that will match ,*;ID;*;*,
    var re = new RegExp(',[^,]*;' + employeeIDAsStr + ';[^,]*;[^,]*,', 'g');

    // get the actual current entry
    oldEntry = dhlwseisValue.match(re)[0];

    // tokenize the current entry
    oldEntryTokens = oldEntry.split(';');

    // now we must replace whatever is in the endDate slot with the input (don't forget the comma!)
    oldEntryTokens[3] = datePicker.value + ',';

    // rejoin the tokens
    newEntry = oldEntryTokens.join(';');

    // replace oldEntry with new
    dhlwseisForm.value = dhlwseisValue.replace(oldEntry, newEntry);

    console.log('endDate');
};

function checkDhlwseis() {

    dhlwseisForm = document.getElementById('dhlwseisForm');

    result = dhlwseisForm.value != '';
    if (result == false) {
        alert('Δεν έχετε κάνει καμμία δήλωση!');
        return result;
    }

    result = !(dhlwseisForm.value.includes(';;') || dhlwseisForm.value.includes(',;') || dhlwseisForm.value.includes(';,'));
    if (result == false) {
        alert('Δεν έχετε εισάγει όλες τις απαραίτητες ημερομηνίες!');
        return result;
    }

    tuple = hasValidDates(dhlwseisForm.value);
    id = tuple[0];
    result = tuple[1];


    if (result == false){
        alert('Έχετε εισάγει ημερομηνία λήξης δήλωσης νωρίτερη της αντίστοιχης ημερομηνίας έναρξης για τον/την ' + document.getElementById('ChosenName' + id).innerText + '!');
        return result;
    }

    return result;
}


function hasValidDates(dhlwseis){
    // split by , so you get each one separately
    splitByComma = dhlwseis.split(',');


    // filter the empty ones
    splitByComma = splitByComma.filter(entry => entry != '');

    // loop through them 
    for (entryIndex = 0; entryIndex < splitByComma.length; entryIndex ++){
        currEntry = splitByComma[entryIndex];

        // split entry into parts
        currEntryParts = currEntry.split(';');
        
        // get the start date, i.e. the 3rd part
        startDate = new Date(currEntryParts[2]);

        // get the end date, i.e. the 4th part
        endDate = new Date(currEntryParts[3]);


        // check if end date is earlier than start date
        if (endDate < startDate){
            return [currEntryParts[1], false];
        }
    }

    return ['', true];
}



document.addEventListener("DOMContentLoaded", initialize);


function initialize(){
    // initialize a dictionary with Business -> [[Name, ID]]
    window.businessDictionary = {};

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

        // split into key (Business) and value ([(Name, ID)])
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
        // transform Name;ID into [Name, ID] for every employee
        for (rawDataIndex = 0; rawDataIndex < cleanEmployeeData.length; rawDataIndex ++){
            rawData = cleanEmployeeData[rawDataIndex];

            splitToNameAndId = rawData.split(';');

            finalEmployeeData.push(splitToNameAndId);
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
    currentDhlwseisTable = document.getElementById('CurrentDhlwseisTable');

    // we need to empty the body first, so get access to it
    tableBody = availableWorkersTable.tBodies[0];

    // empty the table body
    tableBody.innerHTML = '';

    // now, for every employee in business, insert row if same employee not in right table
    // so, get access to employees
    employeeList = businessSelectedToEmployeesList(businessSelected);

    // filter them so no one is to the right table
    filteredEmployeeList = employeeList.filter(entry => !tableHasID(currentDhlwseisTable, entry[1]));

    // now, every one of them must be added to the table
    for (filteredEmployeeIndexToInsert = 0; filteredEmployeeIndexToInsert < filteredEmployeeList.length; filteredEmployeeIndexToInsert++){
        // get name and ID to insert
        nameAndIDToInsert = filteredEmployeeList[filteredEmployeeIndexToInsert];

        // insert a row to the table
        var row = availableWorkersTable.tBodies[0].insertRow(0);

        // build the appropriate html in the row
        row.innerHTML = makeLeftRow(nameAndIDToInsert[0], nameAndIDToInsert[1]);
    }

    // now the table is done!
}


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
