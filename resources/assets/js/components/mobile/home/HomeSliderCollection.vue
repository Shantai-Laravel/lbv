<template>

    <section class="collection">
     <h4>{{ colection.translation.name }} {{ trans.vars.General.collection }}</h4>
     <div class="sliderCollectionHome">

       <slick ref="slick" :options="slickOptions">
           <a :href="'/' + $lang + '/' + site + '/collection/' + colection.alias" class="item">

             <img :src="'/images/collections/' + colection.banner_mob" alt="" v-if="colection.banner_mob"/>
             <img src="/images/APJ-collection-mobile-background.JPG" alt="" v-else>
             <div class="innerContent">
               <!-- <p>{{ colection.translation.subtitle }}</p> -->
               <div class="butt">
                 {{ trans.vars.General.shopCollection }}
               </div>
             </div>
           </a>
           <a :href="'/' + $lang + '/' + site + '/collection/' + colection.alias + '?order=' + set.id" class="item" v-for="set in colection.sets ">
               <img v-if="set.main_photo" :src="'/images/sets/og/' + set.main_photo.src" alt="" />
               <img v-else src="/fronts/img/prod/firstCollection.jpg" alt="" />
           </a>
       </slick>

     </div>
   </section>

</template>

<script>

import Slick from 'vue-slick';
export default {
    components: { Slick },
    props: ['colection', 'site'],
    data(){
        return {
            slickOptions: {
                dots: false,
                infinite: true,
                speed: 800,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                rows: 0
            },
        }
    },
    mounted(){},
    methods: {
        setImage(banner){
            return '/images/collections/' + banner;
        },
    }
}
</script>
