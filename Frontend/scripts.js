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
    booking: "bookingStageModal.php",
    itemReady: "itemReadyStageModal.php",
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
    bookingTransactionModalForAccountsManager:
      "bookingTransactionModalForAccountsManager",
    bookingTransactionModalForAccountsExecutive:
      "bookingTransactionModalForAccountsExecutive",
    itemStageDeliveryInfo: "itemStageDeliveryInfo",
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
  } else if (data.hasOwnProperty("validity")) {
    if (data["validity"]) {
      result.mID = "#" + modalIds.quotationModalWithValidity;
    } else {
      result.mID = "#" + modalIds.quotationModal;
    }
  } else if (data.hasOwnProperty("seekFeedback")) {
    if (data["seekFeedback"]) {
      result.mID = "#" + modalIds.quotationCustomerFeedback;
    }
  } else if (data.hasOwnProperty("Role")) {
    if (data["Role"] == "Acc_Executive") {
      result.mID = "#" + modalIds.bookingTransactionModalForAccountsManager;
    } else if (data["Role"] == "Acc_Manager") {
      result.mID = "#" + modalIds.bookingTransactionModalForAccountsExecutive;
    } else {
      result.mID = "#" + modalIds.bookingStageFormModal;
    }
  } else if (data.hasOwnProperty("readyToDeliver")) {
    if (data["readyToDeliver"]) {
      result.mID = "#" + modalIds.itemStageDeliveryInfo;
    }
  } else {
    result.mID = "#" + modalIds[data["col"]];
  }

  return result;
}
function printer(data) {
  console.log(data);
}
