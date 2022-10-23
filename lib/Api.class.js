//Configurar elementos
//Pegar dados
//Fazer validações
//Retornar dados para determinado elemento

export default class Api{

    constructor(url){
        this.url = url;
    }

    getData(data,element){
        let formData = this.formData(data);
        let fetchData = this.fetchData(formData);

        fetch(this.url,fetchData).then(
            (response) => {
                return response.text();
            }
        ).then(
            (response) => {
                let text = JSON.parse(response);
                element.innerHTML = text;
            }
        )
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