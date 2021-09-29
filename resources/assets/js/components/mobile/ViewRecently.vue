<template>

    <div class="row" v-if="products.length > 0">
        <div class="col-12">
            <div class="title">
                {{ trans.vars.DetailsProductSet.recentlyViewed }}
            </div>
        </div>

        <div class="col-12">
            <div class="sliderContainer slideHome" style="display:block">
                <div class="additional">
                    <slick ref="slick" :options="slickOptions">
                        <div class="oneProduct" v-for="product in products">
                            <div class="addToWish"></div>
                            <a class="imgBlock" :href="'/' + $lang + '/' + site + '/catalog/' +  product.category.alias + '/' + product.alias">
                                <img :src="'/images/products/og/' + product.main_image.src" :alt="product.translation.name" v-if="product.main_image"/>
                                <img src="/fronts/img/prod/oneProduct.jpg" :alt="product.translation.name" v-else/>
                            </a>
                            <a :href="'/' + $lang + '/' + site + '/catalog/' +  product.category.alias + '/' + product.alias">{{ product.translation.name }}</a>
                            <div class="price">
                                <span>{{ product.personal_price.price }} {{ $currency }}</span>
                                <span>{{ product.personal_price.price }} {{ $currency }}</span>
                            </div>
                        </div>
                    </slick>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import { bus } from '../../app';
    import Slick from 'vue-slick';

    export default {
        components: { Slick },
        props : ['wish', 'site'],
        data() {
            return {
                slickOptions: {
                    dots: false,
                    infinite: true,
                    speed: 800,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                    arrows: false,
                },
                products : [],
                page: 1,
                last_page: '',
                loading: false,
                ready: false,
                className: 'hide',
            }
        },
        mounted() {
            this.load();
        },
        methods: {
            // load products method
            load() {
                this.loading = true;
                axios.post('/' + this.$lang + '/' + this.site + '/get-recently-products')
                    .then(response => {
                        this.products = response.data;
                        this.loading = false;
                        this.ready = true;
                        let vm = this;
                        setTimeout(function(){
                            vm.className = '';
                        }, 4000)
                    })
                    .catch(e => {
                        this.loading = false;
                        console.log('loading products error.');
                    })
            },
        }
    }
</script>

<style>
    .hide{
        visibility: hidden;
    }
</style>
