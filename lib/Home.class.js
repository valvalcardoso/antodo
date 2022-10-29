import Api from '../lib/Api.class.js';

export default class Home extends Api{

    constructor(username,tables,url){
        super(url);

        this.getData('RequestData').then((result) => {
            username.innerHTML = result['usuário'][0]['nomeUsuário'];
            let tableKeys = Object.keys(tables);
            tableKeys.forEach((element) => {
                this.setTableElements(tables[element],
                    result[tables[element]['referenceDatabase']],
                    tables[element]['referenceCamp'],
                    tables[element]['data']);
            });

        });
        
    }

    chooseSection(sectionClass,referenceClass){
        for(let i = 0;i < referenceClass.length;i++){
            referenceClass[i].addEventListener('click',(event) => {
                for(let c = 0;c < sectionClass.length;c++){
                    sectionClass[c].style.display = 'none';
                    if(sectionClass[c].id == referenceClass[i].innerHTML){
                        sectionClass[c].style.display = 'block';
                    }
                }
            })
        }
    }

    setTableElements(tableObject,data,dataReference,dataRequired){

        let table = document.getElementById(tableObject['id']);
        let tbody = table.getElementsByClassName('t-body');
        let rows = tbody[0].children;
        let camp = Object.keys(tableObject['objectCamp']);

        for(let cont = 0;cont < rows.length;cont++){
            rows[cont].innerHTML = '';
            camp.forEach(value => {
                let tdata = document.createElement('td');
                let text = document.createTextNode('');
                data.forEach(register => {
                    console.log(register);
                    if(register[dataReference] == value){
                        text = document.createTextNode(`${register[dataRequired]}`);
                        data.splice(data.indexOf(register),1);
                    }
                })
                tdata.appendChild(text);
                rows[cont].appendChild(tdata);


            })
        }
    }


}