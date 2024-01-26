var zaloWidgetInterval;
    var tawkToInterval;
    var skypeWidgetInterval;
    var lcpWidgetInterval;
    var closePopupTimeout;
    var lzWidgetInterval;
    var arCuMessages = ["Hello!", "Have a questions?", "Let's Chat !!"];
    var arCuLoop = false;;
    var arCuCloseLastMessage = false;
    var arCuPromptClosed = false;
    var _arCuTimeOut = null;
    var arCuDelayFirst = 2000;
    var arCuTypingTime = 2000;
    var arCuMessageTime = 4000;
    var arCuClosedCookie = 0;
    var arcItems = [];
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();

    window.addEventListener('load', function() {
        jQuery('#arcontactus').on('arcontactus.init', function() {
            if (arCuClosedCookie) {
                return false;
            }
            arCuShowMessages();
        });
        jQuery('#arcontactus').on('arcontactus.openMenu', function() {
            clearTimeout(_arCuTimeOut);
            if (!arCuPromptClosed) {
                arCuPromptClosed = true;
                jQuery('#arcontactus').contactUs('hidePrompt');
            }
        });
        jQuery('#arcontactus').on('arcontactus.openCallbackPopup', function() {
            clearTimeout(_arCuTimeOut);
            if (!arCuPromptClosed) {
                arCuPromptClosed = true;
                jQuery('#arcontactus').contactUs('hidePrompt');
            }
        });

        jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
            clearTimeout(_arCuTimeOut);
            if (arCuClosedCookie != "1") {
                arCuClosedCookie = "1";
            }
        });
        jQuery('#arcontactus').on('arcontactus.successCallbackRequest', function() {
            closePopupTimeout = setTimeout(function() {
                jQuery('#arcontactus').contactUs('closeCallbackPopup');
            }, 10000);
        });
        jQuery('#arcontactus').on('arcontactus.closeCallbackPopup', function() {
            clearTimeout(closePopupTimeout);
        })
        var arcItem = {};
        arcItem.id = 'msg-item-1';
        arcItem.class = 'msg-item-facebook-messenger';
        arcItem.title = "Messenger";
        arcItem.subTitle = "Send us a message";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
        arcItem.href = 'https://m.me/harmi.spares';
        arcItem.color = '#0084FF';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-11';
        arcItem.onClick = function(e) {
            e.preventDefault();
            jQuery('#arcontactus').contactUs('closeMenu');
            if (typeof FB == 'undefined' || typeof FB.CustomerChat == 'undefined') {
                console.error('Facebook customer chat integration is disabled in module configuration');
                return false;
            }
            jQuery('#arcontactus').contactUs('hide');
            jQuery('#ar-fb-chat').addClass('active');
            FB.CustomerChat.showDialog();
        }
        var arcItem = {};
        arcItem.id = 'msg-item-2';
        arcItem.class = 'msg-item-whatsapp';
        arcItem.title = "Whatsapp";
        arcItem.subTitle = "Say hello";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>';
        arcItem.href = whatsapp_url;
        arcItem.color = '#25D366';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-6';
        arcItem.class = 'msg-item-envelope';
        arcItem.title = "Email us";
        arcItem.subTitle = "Send us email message directly";
        arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
        arcItem.href = 'mailto:info@harmispares.com';
        arcItem.target = '_self';
        arcItem.color = '#FF643A';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-9';
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Callback";
        arcItem.subTitle = "Request a callback";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.href = 'callback';
        arcItem.color = '#4EB625';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-10';
        arcItem.onClick = function(e) {
            e.preventDefault();
            jQuery('#arcontactus').contactUs('closeMenu');
            if (typeof Tawk_API == 'undefined') {
                console.error('Tawk.to integration is disabled in module configuration');
                return false;
            }
            jQuery('#arcontactus').contactUs('hide');
            Tawk_API.showWidget();
            Tawk_API.maximize();
            tawkToInterval = setInterval(function() {
                checkTawkIsOpened();
            }, 100);
        }
        arcItem.class = 'msg-item-comment-lines-light';
        arcItem.title = "Live Chat";
        arcItem.subTitle = "Let's Chat";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M280 272H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h144c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm96-96H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 384c-28.3 0-56.3-4.3-83.2-12.8l-15.2-4.8-13 9.2c-23 16.3-58.5 35.3-102.6 39.6 12-15.1 29.8-40.4 40.8-69.6l7.1-18.7-13.7-14.6C47.3 313.7 32 277.6 32 240c0-97 100.5-176 224-176s224 79 224 176-100.5 176-224 176z"></path></svg>';
        arcItem.color = '#59B822';
        arcItems.push(arcItem);
        var arcItem = {};
        jQuery('#arcontactus').contactUs({
            buttonIcon: '<svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="currentColor"></use></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path></defs></svg>',
            drag: false,
            mode: 'regular',
            buttonIconUrl: 'https://wp496.areama.net/wp-content/plugins/ar-contactus/res/img/msg.svg',
            showMenuHeader: true,
            menuHeaderText: "Need help? Contact us!",
            showHeaderCloseBtn: true,
            headerCloseBtnBgColor: '#F49918',
            headerCloseBtnColor: '#F49918',
            itemsIconType: 'rounded',
            align: 'right',
            reCaptcha: false,
            reCaptchaKey: '',
            countdown: 0,
            theme: '#F49918',
            cache: false,
            buttonText: "Contact us",
            buttonSize: 'large',
            menuSize: 'large',
            phonePlaceholder: '+XXX-XX-XXX-XX-XX',
            callbackSubmitText: 'Waiting for call',
            errorMessage: 'Thank you. We are call you back soon.',
            callProcessText: 'We are calling you to phone',
            callSuccessText: 'Thank you.<br />We are call you back soon.',
            iconsAnimationSpeed: 600,
            callbackFormText: 'Please enter your phone number<br />and we call you back soon',
            items: arcItems,
            ajaxUrl: 'userinquiry/create_callback/',
            promptPosition: 'top',
            callbackFormFields: {
                name: {
                    name: 'your_name',
                    enabled: true,
                    required: true,
                    type: 'text',
                    label: "",
                    placeholder: "Enter your name"
                },
                phone: {
                    name: 'your_contact',
                    enabled: true,
                    required: true,
                    type: 'text',
                    label: '',
                    placeholder: "Your Phone Number"
                }
            },
        });
        Tawk_API.onLoad = function() {
            if (!Tawk_API.isChatOngoing()) {
                Tawk_API.hideWidget();
            } else {
                jQuery('#arcontactus').contactUs('hide');
            }
        };
        Tawk_API.onChatMinimized = function() {
            Tawk_API.hideWidget();
            setTimeout(function() {
                Tawk_API.hideWidget();
            }, 100);
            jQuery('#arcontactus').contactUs('show');
        };
        Tawk_API.onChatEnded = function() {
            Tawk_API.hideWidget();
            jQuery('#arcontactus').contactUs('show');
        };
        twak_to_gj();
    });

    function checkTawkIsOpened() {
        console.log('checkTawkIsOpened');
        if (Tawk_API.isChatMinimized()) {
            Tawk_API.hideWidget();
            jQuery('#arcontactus').contactUs('show');
            clearInterval(tawkToInterval);
        }
    }