function printDiv(divName) {
    removeElement('submitButton');
    removeElement('printButton');
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
    location.reload();
}

function removeElement(elementId) {
    // Removes an element from the document
    var element = document.getElementById(elementId);
    element.parentNode.removeChild(element);
    var elements = document.getElementsByClassName('removable');
    while (elements.length > 0) {
        elements[0].parentNode.removeChild(elements[0]);
    }
}