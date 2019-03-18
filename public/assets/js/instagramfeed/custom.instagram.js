$( document ).ready(function() {
    let userFeed = new Instafeed({
        get: 'user',
        userId: '11829400097',
        limit: 6,
        resolution: 'low_resolution',
        accessToken: '11829400097.681c2cf.64e930f31f2f40778c80dcf3be5aeeda',
        sortBy: 'most-recent',
        // template:   '<div class="col-sm-4">' +
        //                 '<a href="{{link}}" title="{{caption}}" target="_blank">' +
        //                     '<img src="{{image}}" alt="{{caption}}" class="gallery-image img-fluid"/>' +
        //                     '<div class="gallery-item-info">' +
        //                         '<ul>' +
        //                             '<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fa fa-heart" aria-hidden="true"></i> 89</li>\n' +
        //                             '<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fa fa-comment" aria-hidden="true"></i> 5</li>\n' +
        //                         '</ul>' +
        //                     '</div>' +
        //                 '</a>' +
        //             '</div>',
        template:
            '    <li class="lightwidget__tile">' +
            '        <a class="lightwidget__link" href="{{link}}" target="_blank">' +
            '                <figure class="lightwidget__photo lightwidget__photo--loader">' +
            '                    <div class="lightwidget__image-wrapper lightwidget__image-wrapper--image">' +
            '                        <img class="lightwidget__image" src="{{image}}"\n' +
            '                             sizes="50vw"' +
            '                             alt="{{caption}}">' +
            '                    </div>' +
            '                    <div class="lightwidget__reactions">' +
            '                        <span class="lightwidget__likes">{{likes}}</span>' +
            '                        <span class="lightwidget__comments">{{comments}}</span>' +
            '                    </div>' +
            '                    <figcaption class="lightwidget__caption">{{caption}}</figcaption>' +
            '                </figure>' +
            '        </a>' +
            '    </li>',
    });
    userFeed.run();
});
