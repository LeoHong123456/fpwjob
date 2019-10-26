/**
 * git do not control webim.config.js
 * everyone should copy webim.config.js.demo to webim.config.js
 * and have their own configs.
 * In this way , others won't be influenced by this config while git pull.
 *
 */
var WebIM = {};
WebIM.config = {
    /*
     * XMPP server
     */
    xmppURL: 'im-api.easemob.com',
    /*
     * Backend REST API URL
     */
    apiURL: (location.protocol === 'https:' ? 'https:' : 'http:') + '//a1.easemob.com',
    /*
     * Application AppKey
     */
    appkey: sy_easemob_orgname+'#'+sy_easemob_appname,//修改为自己的

    /*
     * Whether to use wss
     * @parameter {Boolean} true or false
     */
    https: false,                       // 是否使用https
    /*
     * isMultiLoginSessions
     * true: A visitor can sign in to multiple webpages and receive messages at all the webpages.
     * false: A visitor can sign in to only one webpage and receive messages at the webpage.
     */
    isMultiLoginSessions: true,        // 是否开启多页面同步收消息，注意，需要先联系商务开通此功能
    /*
     * set presence after login
     */
    isAutoLogin: true,                  // 自动出席，（如设置为false，则表示离线，无法收消息，需要在登录成功后手动调用conn.setPresence()才可以收消息）
    /**
     * Whether to use window.doQuery()
     * @parameter {Boolean} true or false
     */
    isWindowSDK: false,
    /**
     * isSandBox=true:  xmppURL: 'im-api-sandbox.easemob.com',  apiURL: '//a1-sdb.easemob.com',
     * isSandBox=false: xmppURL: 'im-api.easemob.com',          apiURL: '//a1.easemob.com',
     * @parameter {Boolean} true or false
     */
    isSandBox: false,
    /**
     * Whether to console.log in strophe.log()
     * @parameter {Boolean} true or false
     */
    isDebug: false,                   // 打开调试，会自动打印log，在控制台的console中查看log
    /**
     * will auto connect the xmpp server autoReconnectNumMax times in background when client is offline.
     * won't auto connect if autoReconnectNumMax=0.
     */ 
    autoReconnectNumMax: 2,          // 断线重连最大次数
    /**
     * the interval seconds between each auto reconnectting.
     * works only if autoReconnectMaxNum >= 2.
     */
    autoReconnectInterval: 2,        // 断线重连时间间隔
    /**
     * webrtc supports WebKit and https only
     */
    isWebRTC: (/Firefox/.test(navigator.userAgent) || /WebKit/.test(navigator.userAgent)) && /^https\:$/.test(window.location.protocol),
    /**
     * after login, send empty message to xmpp server like heartBeat every 45s, to keep the ws connection alive.
     */
    heartBeatWait: 4500,              // 使用webrtc（视频聊天）时发送心跳包的时间间隔，单位ms
    /**
     * while http access,use ip directly,instead of ServerName,avoiding DNS problem.
     */
    isHttpDNS: false,

    /**
     * Will show the status of messages in single chat
     * msgStatus: true  show
     * msgStatus: true  hide
     */
    msgStatus: true,

    /**
     * When a message arrived, the receiver send an ack message to the
     * sender, in order to tell the sender the message has delivered.
     * See call back function onReceivedMessage
     */
    delivery: true,                 // 是否发送已读回执

    /**
     * When a message read, the receiver send an ack message to the
     * sender, in order to tell the sender the message has been read.
     * See call back function onReadMessage
     */
    read: true,

    /**
     * When a message sent or arrived, will save it into the localStorage,
     * true: Store the chat record
     * false: Don't store the chat record 
     */
    saveLocal: false,

    /**
     * Will encrypt text message and emoji message
     * {type:'none'}   no encrypt
     * {type:'base64'} encrypt with base64
     * {type:'aes',mode: 'ebc',key: '123456789easemob',iv: '0000000000000000'} encrypt with aes(ebc)
     * {type:'aes',mode: 'cbc',key: '123456789easemob',iv: '0000000000000000'} encrypt with aes(cbc)
     */
    encrypt: {
        type: 'none'
    }
};
