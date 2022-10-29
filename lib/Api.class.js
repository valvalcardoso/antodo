//Configurar elementos
//Pegar dados
//Fazer validações
//Retornar dados para determinado elemento

export default class Api{

    constructor(url){
        this.url = url;
    }

    async getData(data){
        let formData = this.formData(data);
        let fetchData = this.fetchData(formData);

        let response = await fetch(this.url,fetchData);
        let myData = await response.text();
        myData = await JSON.parse(myData);

        return myData;
    }


    formData(data){
        let formData = new FormData();

        formData.append(`${data}`,data);

        return formData;
    }

    fetchData(data){
        let fetchData = {
            method: 'POST',
            body: data,
            headers: new Headers()
        }

        return fetchData;
    }
}