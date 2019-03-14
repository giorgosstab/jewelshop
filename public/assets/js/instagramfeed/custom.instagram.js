$( document ).ready(function() {
    let userFeed = new Instafeed({
        get: 'user',
        userId: '11829400097',
        limit: 6,
        resolution: 'low_resolution',
        accessToken: '11829400097.681c2cf.64e930f31f2f40778c80dcf3be5aeeda',
        sortBy: 'most-recent',
        template: '<div class="col-lg-4 gallery instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>'
    });
    userFeed.run();
});
