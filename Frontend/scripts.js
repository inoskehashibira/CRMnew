function modalIdBuilder(data) {
  console.log(data);

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
    booking: "bookingStageModal.php"
  };
  //predefined modal ids
  var modalIds = {
    new: "newLeadModal",
    dealFormModal: "dealFormModal",
    dealFormApprovalModal: "dealFormApprovalModal",
    quotationModal: "quotationModal",
    quotationModalWithValidity: "quotationModalWithValidity",
    quotationCustomerFeedback: "quotationCustomerFeedback",
    bookingStageFormModal: "bookingStageFormModal",
  };

  // creating Modal URL
  result.mUrl = "Modals/" + modalLocations[data["col"]];

  //creating modal ID based on conditions
  if (data.hasOwnProperty("approvalStatus")) {
    if (data["approvalStatus"]) {
      result.mID = "#" + modalIds.dealFormModal;
    } else {
      result.mID = "#" + modalIds.dealFormApprovalModal;
    }
  } 
  else if (data.hasOwnProperty("validity")) {
    console.log("call from seek");

    if (data["validity"]) {
      result.mID = "#" + modalIds.quotationModalWithValidity;
    } else {
      result.mID = "#" + modalIds.quotationModal;
    }
  } 
  else if (data.hasOwnProperty("seekFeedback")) {
    if (data["seekFeedback"]) {
      result.mID = "#" + modalIds.quotationCustomerFeedback;
    }
  } else if (data.hasOwnProperty("bookStatus")) {
    if (data["bookStatus"]) {
      result.mID = "#" + modalIds.bookingStageFormModal;
    }
  } else {
    result.mID = "#" + modalIds[data["col"]];
  }

  return result;
}

function printer(data) {
  console.log(data);
}
