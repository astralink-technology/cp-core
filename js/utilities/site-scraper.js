require.config({
    paths: {
        'bootstrap': ['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min'],
        'core' : '/cp-front/js/custom/core'
    }
});

require([
    'core/scraping'
],
function (
    scraping
    ) {
    $(document).ready(function () {
        $("#site-scraper").scraping({
            prefix : 'cp-master-scraper'
        })
    });
});

