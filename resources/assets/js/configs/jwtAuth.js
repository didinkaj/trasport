import axios from 'axios'

import firebase from 'firebase'
const  JWT_AUTH = axios.get('api/user').then((response) => {


    let two_fa_token = response.data.two_fa_token

    let email = response.data.email

    firebase.auth().signInWithEmailAndPassword(email,two_fa_token).then((resp)=>{

    }).catch(error => {

        firebsase.auth().createUserWithEmailAndPassword(email,two_fa_token).then((resp) => {

        }).catch(error=>{

        })

    })

})

export default JWT_AUTH;