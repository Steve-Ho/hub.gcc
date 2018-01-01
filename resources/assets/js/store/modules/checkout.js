import * as types from './../mutation-type'

export default{

    state: {
        paid: false,
        info:false
    },

    mutations:{
        [types.SET_PAYMENT](state) {
            state.paid = true
        },
        [types.SET_PAYMENT_INFO](state) {
            state.info = true
        },
    },

    actions:{
        paymentRequest({commit}){
            commit({
                type: types.SET_PAYMENT
            })
        },

        paymentInfoRequest({commit}){
            commit({
                type:types.SET_PAYMENT_INFO
            })
        }
    }
}