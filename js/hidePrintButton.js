function printpage() {
    var printButton = document.getElementById("print_button");
    printButton.style.visibility = 'hidden';
    window.print()
    printButton.style.visibility = 'visible';
}