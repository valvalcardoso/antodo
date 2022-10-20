class Login{

    constructor(email,senha,url,element){
        this.email = email;
        this.senha = senha;
        this.url = url;
        this.element = element
    }

    msg(){
        let fData = this.fetchData();

        let msg = fetch(url,fData).then((msg) => {
            return msg.text();
        }).then((msg) => {
            let response = JSON.parse(msg);
            this.element.innerHTML = response;
        });
    }

    formData(){
        this.data = new FormData();

        this.data.append('email',email.value);
        this.data.append('senha',senha.value);
    }

    fetchData(){
        let fData = {
            method: 'POST',
            body: this.data,
            headers: new Headers()

        };

        return fData;
    }

}


let email = document.getElementById('e-mail');
let senha = document.getElementById('senha');
let submit = document.getElementById('btn');
let warning = document.getElementById('warning');
let myForm = document.getElementById('myForm');


let url = '../index.php';

myForm.addEventListener('submit',(event) => {
    event.preventDefault();
})

submit.addEventListener('click',(event) => {
    let login = new Login(email,senha,url,warning);
    login.formData();
    login.msg();
});