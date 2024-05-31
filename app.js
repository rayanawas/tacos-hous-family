window.addEventListener("load", function () {
    const barCodeElement = document.getElementById('barcode');
    const textElement = document.getElementById('text');
    const color = document.getElementById('color');
    document.getElementById('barform').addEventListener('input', updateBarCode);
    document.getElementById('barform').addEventListener('submit', event => event.preventDefault());

    function updateBarCode() {
        JsBarcode("#barcode", textElement.value, {
            lineColor: color.value,
            displayValue: false
        });
        document.getElementById('barcode-download-button').href = barCodeElement.src;
    }
    updateBarCode();
});