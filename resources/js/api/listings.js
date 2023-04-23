import http from '../http';

const getJobListings = () => http.get('/api/v1/listings');

export { getJobListings };