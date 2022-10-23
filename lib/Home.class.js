import Api from '../lib/Api.class.js';

export default class Home extends Api{

    constructor(username,url){
        super(url);

        this.getData('nomeUsuário',username)
    }
}