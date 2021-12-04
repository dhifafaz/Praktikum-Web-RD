function addHist(el){
    const id = el.getAttribute('data-id');
    const judul = el.getElementsByClassName('card-head')[0].innerText;
    const isi = el.getElementsByClassName('card-body')[0].innerText;

    const histItem = {
        id : id,
        judul : judul,
        isi : isi
    }

    if (localStorage.getItem('arrOfHyst') !== null){
        let histories = JSON.parse(localStorage.arrOfHyst);
        histories.push('hyst'+id);
        histories = [...new Set(histories)];

        localStorage.setItem('arrOfHyst', JSON.stringify(histories));

    }else{
        localStorage.setItem('arrOfHyst', JSON.stringify(['hyst'+id]));
    }
    localStorage.setItem('hyst'+id, JSON.stringify(histItem));

    
    
}

function histRender (){
    const history_buck = document.getElementById('history_buck');
    let template = ' ';
    
    if(localStorage.arrOfHyst !== null){
        let histories = JSON.parse(localStorage.arrOfHyst);

        histories = [...new Set(histories)];

        

        histories.forEach(item => {
            // if(item === null){
            //     item.pop();
            // }
            const hist = JSON.parse(localStorage.getItem(item));

            template += `
            <div style="margin-bottom: 10px; border: solid 1px gray;" >
                <h5>${hist.judul}</h5>
                <p>${hist.judul}</p>
            </div>
            `
        });
        history_buck.innerHTML = template;
    }
}
histRender();