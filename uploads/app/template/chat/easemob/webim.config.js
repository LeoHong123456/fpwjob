var WebIM = {};
WebIM.config = {
    xmppURL: 'im-api.easemob.com',
    apiURL: (location.protocol === 'https:' ? 'https:' : 'http:') + '//a1.easemob.com',
    appkey: sy_easemob_orgname+'#'+sy_easemob_appname,
    https: false, 
    isMultiLoginSessions: true,     
    isAutoLogin: true,                  
    isWindowSDK: false,    
    isSandBox: false,
    isDebug: false,                
    autoReconnectNumMax: 2,        
    autoReconnectInterval: 2,      
    isWebRTC: (/Firefox/.test(navigator.userAgent) || /WebKit/.test(navigator.userAgent)) && /^https\:$/.test(window.location.protocol),
    heartBeatWait: 4500,           
    isHttpDNS: false,
    delivery: true,                
    read: true,
    saveLocal: false,
    encrypt: {
        type: 'none'
    }
};
