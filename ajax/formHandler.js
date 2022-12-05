window.onload = () => {
    document.querySelector('#first-name-input').addEventListener('input', (event) => {
        if (event.target.value === '') {
            document.querySelector('#first-name-suggestions').innerHTML = '';
        } else {
            const xmlhttp = new XMLHttpRequest();
    
            xmlhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.querySelector('#first-name-suggestions').innerHTML = this.responseText;
                }
            };
    
            xmlhttp.open('GET', 'suggestions.php?text=' + event.target.value, true);
            xmlhttp.send();
        }
    });
};
