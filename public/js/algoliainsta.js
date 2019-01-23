(function() {



    const search = instantsearch({
        appId: 'V761VYONMP',
        apiKey: 'd5c74b602d27b0508aa0681cc0f5c161',
        indexName: 'products',
        routing: true
    });

    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits',
            templates: {
                empty: 'No results',
                item: function(item) {
                    return `
                        <div class="blog-right wow fadeIn">
                            <div class="row">
                                <div class="col-lg-4 col-4"> 
                                    <a href="${window.location.origin}/shop/${item.slug}">
                                        <img src="${window.location.origin}/storage/${item.image}" alt="img" class="img-fluid" width="200" /> 
                                    </a>
                                </div>
                                <div class="col-lg-8 col-8 p-0">
                                    <h4 style="font-size: 20px !important;"><a href="${window.location.origin}/shop/${item.slug}">${item._highlightResult.name.value}</a></h4>
                                    <p>${item.description}</p>
                                    <p><span>€${(item.price / 100).toFixed(2)}</span></p>
                                    <p><span class="badge badge-warning">${(item.categories)}</span></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    `;
                }
            }
        })
    );

    // initialize SearchBox
    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#search-box',
            poweredBy: true,
            placeholder: 'Search for products'
        })
    );

    // initialize pagination
    search.addWidget(
        instantsearch.widgets.pagination({
            container: '#pagination-top',
            maxPages: 7,
            // default is to scroll to 'body', here we disable this behavior
            scrollTo: false
        })
    );
    search.addWidget(
        instantsearch.widgets.pagination({
            container: '#pagination-bot',
            maxPages: 7,
            // default is to scroll to 'body', here we disable this behavior
            scrollTo: false
        })
    );

    search.addWidget(
        instantsearch.widgets.stats({
            container: '#stats-container-top',
            templates : {
                body: function(data){
                    return `<h5>You have ${data.nbHits} results, fetched in ${data.processingTimeMS} ms.</h5>`;
                }
            }
        })
    );
    search.addWidget(
        instantsearch.widgets.stats({
            container: '#stats-container-bot',
            templates : {
                body: function(data){
                    return `<h5>You have ${data.nbHits} results, fetched in ${data.processingTimeMS} ms.</h5>`;
                }
            }
        })
    );

    // initialize RefinementList
    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#refinement-list',
            attributeName: 'categories',
            sortBy: ['name:asc']
        })
    );

    // initialize clearAll
    search.addWidget(
        instantsearch.widgets.clearAll({
            container: '#clear-all',
            templates: {
                link: 'Reset everything'
            },
            autoHideContainer: false
        })
    );

    search.addWidget(
        instantsearch.widgets.rangeSlider({
            container: '#price',
            attributeName: 'price',
            tooltips: {
                format: function(rawValue) {
                    return '€' + Math.round(rawValue / 100);
                }
            }
        })
    );

    // search.addWidget(
    //     instantsearch.widgets.sortBySelector({
    //         container: '#sortbycontainer',
    //         indices: [
    //             {name: 'instant_search', label: 'Most relevant'},
    //             {name: 'instant_search_price_asc', label: 'Lowest price'},
    //             {name: 'instant_search_price_desc', label: 'Highest price'}
    //         ],
    //         cssClasses: { select: 'form-control' }
    //     })
    // );

    search.start();
})();
