import http from '../http';

const getJobListings = () => http.get('/api/v1/listings');

const getListing = (listingId) => http.get(`/api/v1/listings/${listingId}`)

export { getJobListings, getListing };
