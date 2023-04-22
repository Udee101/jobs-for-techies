<template>
	<section class="hero" id="home">
  	<hero-section></hero-section>
	</section>

	<section class="categories" id="categories">
		<div class="categories-container">
			<p class="text-center text-xl pb-1 section-header">Categories</p>
				
			<div class="category">
				<category-box
					v-for="(category, index) in categories" 
					:category="category"
					:key="index"
				></category-box>
			</div>
		</div>
	</section>

	<section class="featured-jobs" id="jobs">
		<div class="feat-job-container">
			<p class="text-center text-xl pb-1 section-header">Featured Jobs</p>
			<div class="jobs">
					<job-card
						v-for="(job, index) in listings" 
						:key="index"
						:job="job"
					>
					</job-card>
			</div>
		</div>
	</section>

</template>

<script>
import HeroSection from '../components/HeroSection.vue';
import CategoryBox from '../components/CategoryBox.vue';
import MarketingImg from '../../img/marketing.svg'
import PmImg from '../../img/pm.svg'
import DesignImg from '../../img/design.svg'
import HrImg from '../../img/hr.svg'
import FinanceImg from '../../img/finance.svg'
import BusinessImg from '../../img/business.svg'
import { getJobListings } from '../api/listings'
import JobCard from '../components/JobCard.vue';

export default {
	components: {
		"hero-section": HeroSection,
		"category-box": CategoryBox,
		"job-card": JobCard
	},
	data() {
		return {
			listings: {}
		}
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
	methods: {
		getJobListings,
	},
	mounted() {
		this.getJobListings().then((res) => {
			this.listings = res.data.listings
			console.log(this.listings);
		}).catch((error) => {
			console.log(error.response.data);
		})
	},
};
</script>

<style scoped>
</style>
