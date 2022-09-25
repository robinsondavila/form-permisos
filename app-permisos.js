function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function (e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}

let signaturePad = null;

window.addEventListener('load', async () => {

    const canvas = document.querySelector("canvas");
    canvas.height = canvas.offsetHeight;
    canvas.width = canvas.offsetWidth;

    signaturePad = new SignaturePad(canvas, {});

    const form = document.querySelector('#form-permiso');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        let curso = document.getElementById('curso').value;
        let grado = document.getElementById('grado').value;
        let seccion = document.getElementById('seccion').value;
        let name = document.getElementById('name').value;
        let carrera = document.getElementById('carrera').value;
        let area = document.getElementById('area').value;
        let tipo = document.getElementById('tipo').value;
        let color = document.getElementById('color').value;
        let marca = document.getElementById('marca').value;
        let motivo = document.getElementById('motivo').value;
        let modelo = document.getElementById('modelo').value;
        let instructor = document.getElementById('instructor').value;
        let serie = document.getElementById('serie').value;
        let observaciones = document.getElementById('observaciones').value;
        let dpi = document.getElementById('dpi').value;
        let number= document.getElementById('number').value;
        

        generatePDF(curso, grado, seccion, name, carrera, area, tipo, color, marca, motivo, modelo, instructor, serie, observaciones, dpi, number);
    })

});

async function generatePDF(curso, grado, seccion, name, carrera, area, tipo, color, marca, motivo, modelo, instructor, serie, observaciones, dpi, number) {
    const image = await loadImage("form.jpg");
    const signatureImage = signaturePad.toDataURL();

    const pdf = new jsPDF('p', 'pt', 'letter');

    pdf.addImage(image, 'PNG', 0, 0, 612, 792);
    pdf.addImage(signatureImage, 'PNG', 200, 655, 200, 60);

    pdf.setFontSize(13);
    pdf.text(curso, 240, 205);

    const date = new Date();
    pdf.text(date.getUTCDate()+(" ") +("/").toString(), 400, 316);
    pdf.text((date.getUTCMonth() + 1)+ (" ")+("/").toString() , 425, 316);
    pdf.text(date.getUTCFullYear().toString(), 443, 316);

    pdf.setFontSize(10);
    pdf.text(name, 150, 230);
    pdf.text(grado, 150, 257);
    pdf.text(seccion, 460, 257);
    pdf.text(carrera, 150, 283);
    pdf.text(area, 150, 316);
    pdf.text(tipo, 65, 387);
    pdf.text(color, 340, 387);
    pdf.text(marca, 65, 420);
    pdf.text(motivo, 340, 420);
    pdf.text(modelo, 65, 450);
    pdf.text(instructor, 340, 450);
    pdf.text(serie, 65, 487);
    pdf.text(observaciones, 340, 487);
    pdf.text(number, 260, 728);
    pdf.text(dpi, 250, 758);

    pdf.setFillColor(0,0,0);

    pdf.save("Permiso_Dispositivos.pdf");

}