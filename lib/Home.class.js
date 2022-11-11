import Api from '../lib/Api.class.js';

export default class Home extends Api{

    constructor(username,tables,url){
        super(url);

        this.tables = tables;

        this.getData('RequestData').then((result) => {
            username.innerHTML = result['usuário'][0]['nomeUsuário'];

            this.setTableElements(tables['Cronograma Semanal'],
            result[tables['Cronograma Semanal']['referenceDatabase']],
            tables['Cronograma Semanal']['referenceCamp'],
            tables['Cronograma Semanal']['data']
            );
        });
        
    }

    chooseSection(sectionClass,referenceClass){
        for(let i = 0;i < referenceClass.length;i++){

            referenceClass[i].addEventListener('click',(event) => {
                for(let c = 0;c < sectionClass.length;c++){
                    referenceClass[c].style.background = 'none';
                    sectionClass[c].style.display = 'none';
                    if(sectionClass[c].id == referenceClass[i].innerHTML){
                        sectionClass[c].style.display = 'block';
                    }
                }

                referenceClass[i].style.background = '#'+230426;
            })
        }
    }

    setProjectSection(elementClass,section){
        this.getData('RequestData').then(data => {
            for(let i = 0;i < data['atividade'].length;i++){

                elementClass[i].innerHTML = data['projeto'][i]['nomeProjeto'];

                elementClass[i].addEventListener('click',event => {
                    section.style.display = 'none';
                    let tabela = document.getElementById('Atividades-Projetos');
                    tabela.style.display = 'block';
                    this.setTableElements(this.tables['Atividades-Projetos'],
                    data[this.tables['Atividades-Projetos']['referenceDatabase']][i],
                    this.tables['Atividades-Projetos']['referenceCamp'],
                    this.tables['Atividades-Projetos']['data'])
                })
            }
        })
    }

    setTableElements(tableObject,data,dataReference,dataRequired){

        let table = document.getElementById(tableObject['id']);
        let tbody = table.getElementsByClassName('t-body');
        let rows = tbody[0].children;
        let camp = Object.keys(tableObject['objectCamp']);
        let lastRow = [];

        camp.forEach(value => {
            lastRow.push(false);
        })

        for(let cont = 0;cont < rows.length;cont++){
            rows[cont].innerHTML = '';
            camp.forEach(value => {
                let tdata = document.createElement('td');
                let addButton = document.createElement('button');
                let paragraph = document.createElement('p');

                let text = document.createTextNode('');
                let textButton = document.createTextNode('+')

                addButton.appendChild(textButton);
                addButton.style.display = 'none';

                data.forEach(register => {
                    if(register[dataReference] == value){
                        text = document.createTextNode(`${register[dataRequired]}`);
                        paragraph.className = 'data';
                        data.splice(data.indexOf(register),1);
                    }
                })
                paragraph.appendChild(text);
                tdata.appendChild(paragraph);

                rows[cont].appendChild(tdata);

                if(paragraph.innerHTML == '' && lastRow[camp.indexOf(value)] == false){
                    addButton.style.display = 'block';
                    addButton.className = 'add-button';
                    tdata.appendChild(addButton);
                    lastRow[camp.indexOf(value)] = true;
                }

            })
        }
    }
}