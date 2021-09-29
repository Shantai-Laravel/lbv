<template>

    <form class="row shippingInformation">
        <div class="col-12 titleCeck">
            <p>{{ trans.vars.Orders.paymentMethod }}</p>
            <span>{{ trans.vars.Orders.step }} 2 of 3</span>
        </div>
        <div class="col-12 shippingBloc" v-if="countrydelivery !== 140">
            <div class="row paymentMethodContainer">
                <div class="col-lg-3 col-md-6">
                    <div class="paymentMethod" @click="selectPaymentPaydo">
                        <p>Cash on Delivery</p>
                        <!-- <span><img src="/fronts/img/payment-methods/paypal.svg" alt="payment"/></span> -->
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="paymentMethod" @click="setPayment(cache3)">
                        <p>VisaMastercard</p>
                        <span
                            ><img src="/fronts/img/payment-methods/mastercart.svg" alt="payment"/><img
                            src="/fronts/img/payment-methods/visa.svg"
                            alt="payment"
                            /></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" @click="setPayment(cache3)">
                    <div class="paymentMethod">
                        <p>iDeal</p>
                        <span><img src="/fronts/img/payment-methods/ideal.svg" alt="payment"/></span>
                        <span>Available only for Netherlands</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" @click="setPayment(cache3)">
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
        <div class="col-12 shippingBloc" v-else>
            <div class="row paymentMethodContainer">
                <div class="col-lg-3 col-md-6">
                    <div class="paymentMethod" @click="cashOnDelivery">
                        <p>Cash on Delivery</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="paymentMethod" @click="maibCardsPayment">
                        <p>VisaMastercard</p>
                        <span
                            ><img src="/fronts/img/payment-methods/mastercart.svg" alt="payment"/><img
                            src="/fronts/img/payment-methods/visa.svg"
                            alt="payment"
                            /></span>
                    </div>
                </div>
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
  props: ['items', 'mode', 'order_id', 'site', 'countrydelivery'],
  data() {
    return {
        credentials: {
            sandbox: '<Aav5tFuYbs3HnBKmYSvYVyfixocvWtXqqH9aI1gbbBWgofAsA5P1uEGTmVnJDqvovp_eRo0h_wCywzzY>',
            production: 'AcsdVkFUJELrIYwAa8X_wUnWrgIFNfNRrrXHasyJWGD0i-me9iuUpU1ctMQZDwQGTTgQwWgOOud3_RWd'
        },
        ready: true,
        validateError: false,
        serverError: false,

        payments: [],
        mainPayment: [],
        choosePayment: false,
        defaultPayment: false,

        cartData: [],
        amount: '0.00',
        lookOrderBtn: false,
        paymentDriver: 'paydo',
        step: 0,
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

      // console.log(this.countrydelivery, 'mcdms');
  },
  methods: {
      dismisAllert(){
          this.validateError = false;
      },
      getPayments(){
          axios.post('/' + this.$lang + '/order-get-payments')
              .then(response => {
                  this.payments = response.data;
              })
              .catch(e => {
                  this.serverError = 'A avut loc o problema tehnica!';
                  console.log('error load payments')
              })
      },
      pay(){
          let vm = this;
          bus.$emit('cartData');
          this.validate();

          if (!this.validateError) {
              if (this.lookOrderBtn === false) {
                  this.lookOrderBtn = true;
                  window.location.href = window.location.origin + '/' + this.$lang + '/' + this.site + '/order/payment/methods/' + this.choosePayment + '/' + this.amount + '/' + this.order_id + '/' + this.paymentDriver;
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
                  this.lookOrderBtn = true;
                  axios.post('/' + this.$lang + '/order-shipping', {
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
          // if (this.cartData.delivery.length < 1) {
          //     error = 'delivery missing!'
          // }
          if (this.choosePayment === false) {
              error = "Choose payment method!";
          }

          this.validateError = error;
      },
      selectPayment(){
          this.paymentDriver = "payop";
          this.step = this.step + 1;
      },
      selectPaymentPaydo(){
          this.choosePayment = 1;
          this.paymentDriver = "paydo";
          this.step = this.step + 1;
      },
      maibCardsPayment(){
          this.choosePayment = 0;
          this.paymentDriver = "maib";
          this.step = this.step + 1;
      },
      cashOnDelivery(){
          this.choosePayment = 0;
          this.paymentDriver = "cash";
          this.step = this.step + 1;
      }
  },

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
