const token = process.env.OAUTH_TOKEN;
const url = 'https://api.linkedin.com/v2/ugcPosts?q=authors&authors=List(urn:li:person:YOUR_USER_ID)';

fetch(url, {
    method: 'GET',
    headers: {
        'Authorization': `Bearer ${token}`,
        'X-Restli-Protocol-Version': '2.0.0'
    }
})
.then(response => response.json())
.then(data => {
    console.log(data);
})
.catch(error => {
    console.error('Error fetching LinkedIn data:', error);
});
