<template>

<section class="collection">
    <aside :style="{ backgroundImage: 'url(\'' + setImage(category.banner_desktop) + '\')' }">
        <h4>{{ category.translation.name }}</h4>
        <p>{{ category.translation.subtitle }}</p>
        <a :href="'/' + $lang + '/' + site + '/catalog/' + category.alias" class="butt">
        <span>{{ trans.vars.General.shopCategory }} <b></b><b></b><b></b></span>
        </a>
    </aside>
    <div>
        <div class="categorySlider">
            <slick
                ref="slick"
                :options="slickOptions">
                <div class="oneProduct" v-for="product in category.products">
                    <div class="addToWish"></div>
                    <a :href="'/' + $lang + '/' + site + '/catalog/' + category.alias + '/' + product.alias" class="imgBlock">
                        <img v-if="product.main_image" :src="'/images/products/og/' + product.main_image.src" alt="product" />
                        <img v-else src="/fronts/img/prod/oneProduct.jpg" alt="product" />
                    </a>
                    <a :href="'/' + $lang + '/' + site + '/catalog/' + category.alias + '/' + product.alias">{{ product.translation.name }}</a>
                    <div class="price">
                        <span>{{ product.personal_price.price }} <span v-if="product.discount < 1">{{ $currency }}</span> </span>
                        <span v-if="product.discount > 0">{{ product.personal_price.old_price }} {{ $currency }}</span>
                    </div>
                </div>
            </slick>
        </div>
    </div>
</section>

</template>

<script>

import Slick from 'vue-slick';
export default {
    components: { Slick },
    props: ['category', 'site'],
    data(){
        return {
            slickOptions: {
                dots: false,
                infinite: true,
                speed: 800,
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: false,
                arrows: false,
            },
        }
    },
    mounted(){},
    methods: {
        setImage(banner){
            if (banner) {
                return '/images/categories/og/' + banner;
            }else {
                return '/images/APL-APJ-cat-desktop-background.JPG';
            }
        },
    }
}
</script>
