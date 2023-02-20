function modalIdBuilder(data) {
  //modal result object
  var result = {
    mID: null,
    mUrl: null,
  };
  //predefined modal locations
  var modalLocations = {
    new: "newLeadModal.php",
    deal: "dealFormModal.php",
    quotation: "quotationModal.php",
  };
  //predefined modal ids
  var modalIds = {
    new: "newLeadModal",
    dealFormModal1: "dealFormModal",
    dealFormModal2: "dealFormApprovalModal",
    quotation: "quotationModal",
    quotation2: "quotationModalWithValidity",
  };

  // creating Modal URL
  result.mUrl = "Modals/" + modalLocations[data["col"]];

  //creating modal ID based on conditions
  if (data.hasOwnProperty("approvalStatus")) {
    if (data["approvalStatus"]) {
      result.mID = "#" + modalIds.dealFormModal1;
    } else {
      result.mID = "#" + modalIds.dealFormModal2;
    }
     } 
    else if (data.hasOwnProperty("validity")) {
    if (data["validity"]) {
      result.mID = "#" + modalIds.quotation2;
    } else {
      result.mID = "#" + modalIds.quotation;
    }
  } else {
    result.mID = "#" + modalIds[data["col"]];
  }

  return result;
}

function printer(data) {
  console.log(data);
}
