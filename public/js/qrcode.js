(()=> {
    const btn = document.getElementById('generate_code');
    btn.addEventListener('click', generate_qr);

    function generate_qr(){
        const qr_text = document.getElementById('qr_text').value;
    
        const url = "https://chart.apis.google.com/chart?cht=qr&chl="+qr_text+"&chs=200x200";
    
        document.getElementById('qr_img').src = url;
    
    }
    
})()