<?php
$default_options = array(
    // Splash Settings
    'bookmarkEnable' => '1',
	'splashPreloaderColor' => '7f2ae8',
	'thumbRecommendedSize' => '250',
	'coverThumbRatio' => '1',
	'spaceX' => '20',
	'coverTitleForBookmark' => 'My Bookmarks',
	'coverTitleForPreferred' => 'Preferred',
	'coverHoverEffectEnable' => '1',
	'coverTitleEnable' => '1',
	'coverTitleFontSize' => '30',
    'coverTitleTextColor' => 'ffffff',
	'coverCollectoinAmount' => '1',
	'coverSocialShareEnabled' => '1',
    'coverTitleBgColor1' => 'CD51DC',
	'coverTitleBgColor2' => '295EE6',
    'coverTitleBgAlpha' => '60',
    // Collection Page
    'collectionBgColor' => 'f4f4f4',
    'collectionHeaderBgColor' => 'ffffff',
    'collectionPreloaderColor' => '7f2ae8',
    'collectionHeaderTitleTextColor' => '000000',
    'collectionHeaderTextColor' => '000000',
    'collectionShareButtons' => '1',
    'collectionShareButtonsIconColor'  => 'rgba(172, 119, 238, 1)',
    'collectionShareButtonsIconHoverColor' => 'rgba(127, 42, 232, 1)',
    //Tags Cloud
    'tagsFilter' => '1',
    'tagCloudAll' => 'All',
    'tagCloudTextColor' => '000000',
    'tagCloudBgColor' => 'eeeeee',
    //Thumbnails
    'collectionThumbRecomendedWidth' => '300',
    'thumbSpacing' => '10',
    'collectionThumbHoverColor' => 'rgba(0, 0, 0, .7)',
    'collectionThumbContentBGColor' => 'rgba(245,245,245,1)',
    'collectionThumbTitleShow' => '1',
    'collectionThumbTitleColor' => 'rgba(255,255,255,1)',
    'collectionThumbFontSize' => '18',
    //Thumbnails Submenu
    'collectionThumbSubMenuBackgroundColor' => 'rgba(0, 0, 0, 0)',
    'collectionThumbSubMenuBackgroundColorOver' => 'rgba(0, 0, 0, 0.7)',
    'collectionThumbSubMenuIconColor'  => 'rgba(255, 255, 255, 1)',
    'collectionThumbSubMenuIconHoverColor' => 'rgba(255, 255, 255, 1)',
    'collectionInfoEnable'=>'1',
    'collectionItemDownload'=>'1',
    'collectionItemDiscuss'=>'1',
    'collectionSocialShareEnabled'=>'1',
    'collectionLikesEnabled'=>'1',
    //Modal Window
    'modaBgColor'=> 'rgba(0,0,0,0.9)',
    'modalInfoBoxBgColor' => 'rgba(255,255,255,1)',
    'modalInfoBoxTitleTextColor' => '000000',
    'shareTitlePlaceHolder' => 'Share',
    'modalInfoBoxTextColor' => '333333',
    'infoBarExifEnable'=> '1',
    'infoBarCountersEnable'=> '1',
    'infoBarDateInfoEnable'=> '1',
    // Slider Page
    'lightBoxEnable' => '1',
    'sliderPreloaderColor' =>'ffffff',
    'sliderBgColor' => 'rgba(0,0,0,1)',
    'sliderHeaderFooterBgColor' => '000000',
    'sliderNavigationColor' => 'rgba(0,0,0,1)',
    'sliderNavigationIconColor' => 'rgba(255,255,255,1)',
    'sliderItemTitleFontSize' => '24',
    'sliderItemTitleTextColor' => 'ffffff',
    'sliderThumbBarEnable' => '1',
    'sliderThumbBarHoverColor' => 'ffffff',
    'sliderThumbSubMenuBackgroundColor' => 'rgba(0,0,0,1)',
    'sliderThumbSubMenuBackgroundColorOver' => 'rgba(255,255,255,1)',
    'sliderThumbSubMenuIconColor' => 'rgba(255,255,255,1)',
    'sliderThumbSubMenuIconHoverColor' => 'rgba(0,0,0,1)',
    'sliderInfoEnable' => '1',
    'sliderItemDownload' => '1',
    'sliderItemDiscuss' => '1',
    'sliderSocialShareEnabled' => '1',
    'sliderLikesEnabled' => '1',
    // Custom CSS
    'customCSS' => ''
);
$options_tree = array(
    array('label' => 'Splash page',
        'fields' => array(
            'bookmarkEnable' => array('label' => 'Enable Bookmark System',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => 'The system allows you to create a personal collection of your favorite images and share it.'
            ),
            'splashPreloaderColor' => array('label' => 'Preloader Color',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="color"',
		        'text' => 'Set custom color for gallery'
	        ),
	        'thumbRecommendedSize' => array('label' => 'Minimum Thumbnail Width',
		        'tag' => 'input',
		        'attr' => 'type="number" min="100" max="300"',
		        'text' => ''
	        ),
	        'coverThumbRatio' => array('label' => 'Thumbnail ratio',
		        'tag' => 'input',
		        'attr' => 'type="number" min="0.1" max="2" step="0.1"',
		        'text' => 'Height / Width = Ratio'
	        ),
	        'spaceX' => array('label' => 'Space between thumbnails',
		        'tag' => 'input',
		        'attr' => 'type="number" min="5" max="30"',
		        'text' => ''
	        ),
	        'coverHoverEffectEnable' => array('label' => 'Enable 3D hover effect',
		        'tag' => 'checkbox',
		        'attr' => 'data-watch="change"',
		        'text' => ''
	        ),
	        'coverTitleEnable' => array('label' => 'Show collection title',
		        'tag' => 'checkbox',
		        'attr' => 'data-watch="change"',
		        'text' => ''
	        ),
	        'coverTitleFontSize' => array('label' => 'Collection Title - font size',
		        'tag' => 'input',
		        'attr' => 'type="number" min="14" max="36" step="1" data-coverTitleEnable="is:1"',
		        'text' => ''
	        ),
	        'coverTitleTextColor' => array('label' => 'Collection Title - text color',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="color" data-coverTitleEnable="is:1"',
		        'text' => ''
	        ),
	        'coverCollectoinAmount' => array('label' => 'Show the number of items in the collection',
		        'tag' => 'checkbox',
		        'attr' => 'data-watch="change"',
		        'text' => ''
	        ),
	        'coverSocialShareEnabled' => array('label' => 'Show share button for collection',
		        'tag' => 'checkbox',
		        'attr' => 'data-watch="change"',
		        'text' => ''
	        ),
	        'coverTitleBgColor1' => array('label' => 'Cover Hover color 1',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="color"',
		        'text' => 'For Albums / Categories covers - gradient color'
	        ),
	        'coverTitleBgColor2' => array('label' => 'Cover Hover color 2',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="color"',
		        'text' => 'For Albums / Categories covers - gradient color'
	        ),
	        'coverTitleBgAlpha' => array('label' => 'Cover Hover - transparency',
		        'tag' => 'input',
		        'attr' => 'type="number" min="0" max="100" step="10"',
		        'text' => 'For Albums / Categories covers'
	        ),
	        'coverTitleForBookmark' => array('label' => 'Label for Bookmarks Cover (My Bookmarks)',
		        'tag'   => 'input',
		        'attr'  => '',
		        'text'  => ''
	        ),
	        'coverTitleForPreferred' => array('label' => 'Label for Preferred Cover (Preferred)',
		        'tag'   => 'input',
		        'attr'  => '',
		        'text'  => ''
	        ),
        )
    ),
    array('label' => 'Collection Page Settings',
        'fields' => array(
            'collectionBgColor' => array('label' => 'Collection Window color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'collectionHeaderBgColor' => array('label' => 'Header background color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'collectionPreloaderColor' => array('label' => 'Preloader Color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => 'Set custom color for gallery'
            ),
            'collectionHeaderTitleTextColor' => array('label' => 'Header Title - text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'collectionHeaderTextColor' => array('label' => 'Header description - text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'collectionShareButtons' => array('label' => 'Show Share Buttons',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'collectionShareButtonsIconColor' => array('label' => 'Share button Icon color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba" data-collectionShareButtons="is:1"',
                'text' => ''
            ),
            'collectionShareButtonsIconHoverColor' => array('label' => 'Share button Icon Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba" data-collectionShareButtons="is:1"',
                'text' => ''
            ),
        )
    ),
    array('label' => 'Tags Filter',
        'fields' => array(
            'tagsFilter' => array('label' => 'Tags Cloud enable',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => 'Add tags filter for selected collection'
            ),
            'tagCloudAll' => array('label' => 'Tag ALL - name',
                'tag' => 'input',
                'attr' => 'data-tagsFilter="is:1"',
                'text' => ''
            ),
            'tagCloudTextColor' => array('label' => 'Text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color" data-tagsFilter="is:1"',
                'text' => 'Tag button'
            ),
            'tagCloudBgColor' => array('label' => 'Background color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color" data-tagsFilter="is:1"',
                'text' => 'Tag button'
            )
        )
    ),
    array('label' => 'Collection Thumbnails Settings',
        'fields' => array(
            'collectionThumbRecomendedWidth' => array('label' => 'Thumbnail - desired Width',
                'tag' => 'input',
                'attr' => 'type="number" min="100" max="500"',
                'text' => ''
            ),
            'thumbSpacing' => array('label' => 'Space between thumbnails',
                'tag' => 'input',
                'attr' => 'type="number" min="0" max="100"',
                'text' => ''
            ),
            'collectionThumbHoverColor' => array('label' => 'Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionThumbTitleShow' => array('label' => 'Title',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'collectionThumbTitleColor' => array('label' => 'Title Text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba" data-collectionThumbTitleShow="is:1"',
                'text' => ''
            ),
            'collectionThumbFontSize' => array('label' => 'Title Font size',
                'tag' => 'input',
                'attr' => 'type="number" min="11" max="24" step="1" data-collectionThumbTitleShow="is:1"',
                'text' => ''
            ),
            'collectionThumbSubMenuBackgroundColor' => array('label' => 'Submenu button color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionThumbSubMenuIconColor' => array('label' => 'Submenu button Icon color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionThumbSubMenuBackgroundColorOver' => array('label' => 'Submenu button Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionThumbSubMenuIconHoverColor' => array('label' => 'Submenu button Icon Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionInfoEnable' => array('label' => 'Info Button',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => ''
            ),
            'collectionItemDownload' => array('label' => 'Download Button',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => ''
            ),
            'collectionItemDiscuss' => array('label' => 'Discuss Button',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => ''
            ),
            'collectionSocialShareEnabled' => array('label' => 'Share Button',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => ''
            ),
            'collectionLikesEnabled' => array('label' => 'Likes Button',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => ''
            )
        )
    ),
	array('label' => 'Modal Window Settings (Item Info & Share)',
        'fields' => array(
            'modaBgColor' => array('label' => 'Overlap Color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'modalInfoBoxBgColor' => array('label' => 'Info Bar Color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'modalInfoBoxTitleTextColor' => array('label' => 'Info Bar Title text Color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'shareTitlePlaceHolder' => array('label' => 'Share bar name',
                'tag' => 'input',
                'attr' => '',
                'text' => ''
            ),
            'modalInfoBoxTextColor' => array('label' => 'Info Bar Text Color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'infoBarExifEnable' => array('label' => 'Show Exif Data',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'infoBarCountersEnable' => array('label' => 'Show View/Likes/Comments',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'infoBarDateInfoEnable' => array('label' => 'Show item date',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            )
        )
    ),
    array('label' => 'Lightbox Settings',
        'fields' => array(
            'lightBoxEnable' => array('label' => 'Lightbox',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => 'Show the item in the Lightbox by clicking on the thumbnail'
            ),
            'sliderPreloaderColor' => array('label' => 'Preloader Color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'sliderBgColor' => array('label' => 'Background color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderHeaderFooterBgColor' => array('label' => 'Header & Footer background color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => 'Gradient color'
            ),
            'sliderNavigationColor' => array('label' => 'Navigation button color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderNavigationIconColor' => array('label' => 'Navigation button Icons color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderItemTitleFontSize' => array('label' => 'Item Title - font Size',
                'tag' => 'input',
                'attr' => 'type="number" min="11" max="34" step="1"',
                'text' => ''
            ),
            'sliderItemTitleTextColor' => array('label' => 'Item Title text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color"',
                'text' => ''
            ),
            'sliderThumbBarEnable' => array('label' => 'Show Items Thumbnails',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'sliderThumbBarHoverColor' => array('label' => 'Thumbnails Border Color (select mode)',
                'tag' => 'input',
                'attr' => 'type="text" data-type="color" data-sliderThumbBarEnable="is:1"',
                'text' => ''
            ),
            'sliderThumbSubMenuBackgroundColor' => array('label' => 'Item Submenu Button color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderThumbSubMenuIconColor' => array('label' => 'Item Submenu Button Icon color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderThumbSubMenuBackgroundColorOver' => array('label' => 'Item Submenu Button color (over)',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderThumbSubMenuIconHoverColor' => array('label' => 'Item Submenu Button Icon color (over)',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'sliderInfoEnable' => array('label' => 'Item Info button',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'sliderItemDownload' => array('label' => 'Item Download button',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'sliderItemDiscuss' => array('label' => 'Item Discuss button',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'sliderSocialShareEnabled' => array('label' => 'Item Share button',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'sliderLikesEnabled' => array('label' => 'Item Like button',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            )
        )
    ),
    array('label' => 'Advanced Settings',
        'fields' => array('customCSS' => array('label' => 'Custom CSS',
            'tag' => 'textarea',
            'attr' => 'cols="20" rows="10"',
            'text' => 'You can enter custom style rules into this box if you\'d like. IE: <i>a{color: red !important;}</i>
                                                                      <br />This is an advanced option! This is not recommended for users not fluent in CSS... but if you do know CSS, 
                                                                      anything you add here will override the default styles'
        )
            /*,
            'loveLink' => array(
                'label' => 'Display LoveLink?',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => 'Selecting "Yes" will show the lovelink icon (codeasily.com) somewhere on the gallery'
            )*/
        )
    )
);
