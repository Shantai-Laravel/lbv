<template>
    <section class="collection">
         <h4>{{ category.translation.name }}</h4>
         <div class="sliderCollectionHome">
             <slick
                 ref="slick"
                 :options="slickOptions">

                <a :href="'/' + $lang + '/' + site + '/catalog/' + category.alias" class="item">
                     <img :src="'/images/categories/og/' + category.banner_mobile" alt="" v-if="category.banner_mobile"/>
                     <img src="/images/APL-APJ-cat-mobile-background.JPG" alt="" v-else>
                     <div class="innerContent">
                       <!-- <p>{{ category.translation.subtitle }}</p> -->
                       <div class="butt">
                         {{ trans.vars.General.shopCategory }}
                       </div>
                     </div>
                  </a>
                  <a :href="'/' + $lang + '/' + site + '/catalog/' + category.alias + '/' + product.alias" class="item" v-for="product in category.products">
                      <img v-if="product.main_image" :src="'/images/products/og/' + product.main_image.src" alt="product" />
                      <img v-else src="/fronts/img/prod/oneProduct.jpg" alt="product" />
                  </a>
           </slick>
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
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: false,
                arrows: false,
                rows: 0
            },
        }
    },
    mounted(){},
    methods: {
        setImage(banner){
            return '/images/categories/og/' + banner;
        },
    }
}
</script>
