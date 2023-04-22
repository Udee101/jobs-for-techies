<template>
  <section class="categories" id="categories">
		<div class="categories-container">
			<p class="text-center text-xl pb-1 section-header">Categories</p>
				
			<div class="category-wrapper">
				<div class="category">
					<category-box
						v-for="(category, index) in categories" 
						:category="category"
						:key="index"
					></category-box>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
import CategoryBox from '../CategoryBox.vue';
import MarketingImg from '../../../img/marketing.svg'
import PmImg from '../../../img/pm.svg'
import DesignImg from '../../../img/design.svg'
import HrImg from '../../../img/hr.svg'
import FinanceImg from '../../../img/finance.svg'
import BusinessImg from '../../../img/business.svg'

  export default {
    components: {
      "category-box": CategoryBox
    }, 

    setup() {
      const categories = [
        {
          title: "Design & Development",
          imgSrc: DesignImg
        },
        {
          title: "Marketing & Communication",
          imgSrc: MarketingImg
        },
        {
          title: "Project Management",
          imgSrc: PmImg
        },
        {
          title: "Human Research & Development",
          imgSrc: HrImg
        },
        {
          title: "Finance Management",
          imgSrc: FinanceImg
        },
        {
          title: "Business & Consulting",
          imgSrc: BusinessImg
        },
      ]
      
      return {categories}
    },
  }
</script>

<style scoped>

</style>
