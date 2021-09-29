<template>

    <form class="row shippingInformation">
        <div class="col-12 titleCeck">
            <p>{{ trans.vars.Orders.paymentMethod }}</p>
            <span>{{ trans.vars.Orders.step }} 2 of 3</span>
        </div>
        <div class="col-12 shippingBloc">
            <div class="row paymentMethodContainer">
                <div class="col-12">
                    <div class="paymentMethod" @click="setPayment('cache3')">
                        <p>Cash on Delivery</p>
                        <!-- <span><img src="/fronts/img/payment-methods/paypal.svg" alt="payment"/></span> -->
                    </div>
                </div>
                <!-- <div class="col-4">
                    <div class="paymentMethod" @click="setPayment(cache3)">
                        <p>VisaMastercard</p>
                        <span
                            ><img src="/fronts/img/payment-methods/mastercart.svg" alt="payment"/><img
                            src="/fronts/img/payment-methods/visa.svg"
                            alt="payment"
                            /></span>
                    </div>
                </div>
                <div class="col-4" @click="setPayment(cache3)">
                    <div class="paymentMethod">
                        <p>iDeal</p>
                        <span><img src="/fronts/img/payment-methods/ideal.svg" alt="payment"/></span>
                        <span>Available only for Netherlands</span>
                    </div>
                </div>
                <div class="col-4" @click="setPayment(cache3)">
                    <div class="paymentMethod">
                        <p>Bancontact</p>
                        <span><img src="/fronts/img/payment-methods/bancontact.svg" alt="payment"/></span>
                        <span>Available only for Belgium</span>
                    </div>
                </div> -->
                <div class="col-auto">
                    <label class="checkContainer" v-if="mode == 'auth'">
                    <input type="checkbox" name="color" v-model="defaultPayment"/>{{ trans.vars.Payment.saveIt }}
                    <span class="check"></span>
                    </label>
                </div>
                <div class="alertUser  text-center" v-if="validateError">
                    <div class="closeAlert" @click="dismisAllert"></div>
                    <p class="text-danger">{{ validateError }}</p>
                </div>
            </div>
        </div>
    </form>

</template>

<script>
import {bus} from '../../app.js'

export default {
  props: ['items', 'mode', 'order_id', 'prods', 'subprods', 'sets', 'site'],
  data() {
    return {
        ready: true,
        validateError: false,
        serverError: false,

        payments: [],
        mainPayment: [],
        choosePayment: false,
        defaultPayment: false,

        cartData: [],
        amount: 0,
        lookOrderBtn: false,
        step: 'order-payment'
    }
  },
  mounted() {
      this.getPayments();

      bus.$on('getCartData', data => {
          this.cartData = data;
          this.amount = this.cartData.amount;
      });

      bus.$on('pay', data => {
          this.pay();
      });
  },
  methods: {
      dismisAllert(){
          this.validateError = false;
      },
      getPayments(){
          axios.post('/' + this.$lang + '/' + this.site + '/order-get-payments')
              .then(response => {
                  this.payments = response.data;
              })
              .catch(e => {
                  this.serverError = 'A avut loc o problema tehnica!';
                  console.log('error load user')
              })
      },
      pay(){
          let vm = this;
          bus.$emit('cartData');
          this.validate();

          if (!this.validateError) {
              if (this.lookOrderBtn === false) {
                  this.lookOrderBtn = true;
                  window.location.href = window.location.origin + '/' + this.$lang + '/' + this.site + '/order/payment/methods/' + this.choosePayment + '/' + this.amount + '/' + this.order_id;
              }
          }

          setTimeout(function(){
              vm.dismisAllert();
          }, 5000);
      },
      order(){
          let vm = this;
          bus.$emit('cartData');
          this.validate();

          if (!this.validateError) {

              if (this.lookOrderBtn === false) {
                  // this.lookOrderBtn = true;
                  axios.post('/' + this.$lang + '/' + this.site + '/order-shipping', {
                      payment : this.choosePayment,
                  })
                  .then(response => {
                      window.location.href = window.location.origin + '/' + this.$lang + '/order/payment/' + response.data;
                  })
                  .catch(e => {
                      this.serverError = 'A avut loc o problema tehnica!';
                      console.log('error')
                  })
              }
          }
          setTimeout(function(){
              vm.dismisAllert();
          }, 5000);
      },
      validate(){
          let error = false;

          // if (this.cartData.agreeCond == false) {
          //     error = trans.vars.Notifications.agreeRequired
          // }
          if (this.cartData.delivery.length < 1) {
              error = 'delivery missing!'
          }
          if (this.choosePayment === false) {
              error = "Choose payment method!";
          }

          this.validateError = error;
      },
      setPayment(payment){
          this.choosePayment = payment;
      },
  }
}
</script>

<style media="screen">
    .cart .butt.buttView{
        margin-right: auto;
    }
    .hide{
        display: none;
    }
    .tabBox .tabOption {
        position: relative;
        display: block;
        width: 25%;
        margin-left: 10px;
        cursor: pointer;
    }
    .tabBox .tabHeader {
        position: relative;
        display: flex;
    }
    .tabBox {
        margin-bottom: 30px;
    }
</style>
