<?php

define('PRODUCT_NAME'       , 'Astrax');
define('PRODUCT_SITE_URL'   , 'https://astrax.app');

define('SAAS_PRODUCT_BRANDING_NAME', 'Astrax');
define('SAAS_LOGIN_REFERRER', 'https://astrax.app');

define('COMPANY_NAME'       , 'Astrax Community');
define('COMPANY_SUFFIX'     , '');
define('COMPANY_SITE'       , 'astrax.app');
define('COMPANY_SITE_URL'   , 'https://astrax.app');
define('SUPPORT_ADDRESS'    , 'https://discourse.astrax.app/');

define('HELP_URL'                   , 'https://astrax.app');
define('WHOS_USING_URL'             , 'https://astrax.app');
define('TERMS_AND_CONDITIONS_URL'   , 'https://astrax.app');
define('PRIVACY_POLICY_URL'         , 'https://astrax.app');
define('USER_MANUAL_URL'            , 'https://astrax.app');
define('ABOUT_AIRTIME_URL'          , 'https://astrax.app');
define('LIBRETIME_CONTRIBUTE_URL'   , 'https://astrax.app');
define('LIBRETIME_DISCOURSE_URL'    , 'https://astrax.app');
define('UI_REVAMP_EMBED_URL'        , 'https://astrax.app');
define('LIBRETIME_WHATS_NEW_URL'    , 'https://astrax.app');
define('LIBRETIME_UPDATE_FEED'      , 'https://astrax.app');
define('LIBRETIME_EMAIL_FROM'       , 'noreply@astrax.app');

define('LICENSE_VERSION'    , 'GNU AGPL v.3');
define('LICENSE_URL'        , 'http://www.gnu.org/licenses/agpl-3.0-standalone.html');

define('AIRTIME_COPYRIGHT_DATE' , '2012-2022');
define('AIRTIME_REST_VERSION'   , '1.1');
define('AIRTIME_API_VERSION'    , '1.1');
// XXX: it's important that we upgrade this on major version bumps, usually users get more exact info from VERSION in airtime root dir
define('LIBRETIME_MAJOR_VERSION', '3');

// grab values from env (i'll do this everywhere with a small function if we like it)
define('LIBRETIME_CONF_DIR', getenv('LIBRETIME_CONF_DIR') ? getenv('LIBRETIME_CONF_DIR') : '/etc/airtime');
define('LIBRETIME_LOG_DIR', getenv('LIBRETIME_LOG_DIR') ? getenv('LIBRETIME_LOG_DIR') : '/var/log/airtime');

// Defaults
define('DEFAULT_LOGO_PLACEHOLDER', 1);
define('DEFAULT_LOGO_FILE', 'images/airtime_logo.png');
define('DEFAULT_TIMESTAMP_FORMAT', 'Y-m-d H:i:s');
define('DEFAULT_MICROTIME_FORMAT', 'Y-m-d H:i:s.u');
define('DEFAULT_ICECAST_PORT', 8000);
define('DEFAULT_ICECAST_PASS', 'hackme');
define('DEFAULT_SHOW_COLOR', '76aca5');
define('DEFAULT_INTERVAL_FORMAT', 'H:i:s.u');

// Metadata Keys for files
define('MDATA_KEY_FILEPATH'    , 'filepath');
define('MDATA_KEY_DIRECTORY'   , 'directory');
define('MDATA_KEY_MD5'         , 'md5');
define('MDATA_KEY_TITLE'       , 'track_title');
define('MDATA_KEY_CREATOR'     , 'artist_name');
define('MDATA_KEY_SOURCE'      , 'album_title');
define('MDATA_KEY_DURATION'    , 'length');
define('MDATA_KEY_MIME'        , 'mime');
define('MDATA_KEY_FTYPE'       , 'ftype');
define('MDATA_KEY_URL'         , 'info_url');
define('MDATA_KEY_GENRE'       , 'genre');
define('MDATA_KEY_MOOD'        , 'mood');
define('MDATA_KEY_LABEL'       , 'label');
define('MDATA_KEY_COMPOSER'    , 'composer');
define('MDATA_KEY_DESCRIPTION' , 'description');
define('MDATA_KEY_SAMPLERATE'  , 'sample_rate');
define('MDATA_KEY_BITRATE'     , 'bit_rate');
define('MDATA_KEY_ENCODER'     , 'encoded_by');
define('MDATA_KEY_ISRC'        , 'isrc_number');
define('MDATA_KEY_COPYRIGHT'   , 'copyright');
define('MDATA_KEY_YEAR'        , 'year');
define('MDATA_KEY_BPM'         , 'bpm');
define('MDATA_KEY_TRACKNUMBER' , 'track_number');
define('MDATA_KEY_CONDUCTOR'   , 'conductor');
define('MDATA_KEY_LANGUAGE'    , 'language');
define('MDATA_KEY_REPLAYGAIN'  , 'replay_gain');
define('MDATA_KEY_OWNER_ID'    , 'owner_id');
define('MDATA_KEY_CUE_IN'      , 'cuein');
define('MDATA_KEY_CUE_OUT'     , 'cueout');
define('MDATA_KEY_ARTWORK'     , 'artwork');
define('MDATA_KEY_ARTWORK_DATA', 'artwork_data');
define('MDATA_KEY_TRACK_TYPE'  , 'track_type');

define('UI_MDATA_VALUE_FORMAT_FILE'   , 'File');
define('UI_MDATA_VALUE_FORMAT_STREAM' , 'live stream');

//User types
define('UTYPE_HOST'            , 'H');
define('UTYPE_ADMIN'           , 'A');
define('UTYPE_SUPERADMIN'      , 'S');
define('UTYPE_GUEST'           , 'G');
define('UTYPE_PROGRAM_MANAGER' , 'P');

//Constants for playout history template fields
define('TEMPLATE_DATE', 'date');
define('TEMPLATE_TIME', 'time');
define('TEMPLATE_DATETIME', 'datetime');
define('TEMPLATE_STRING', 'string');
define('TEMPLATE_BOOLEAN', 'boolean');
define('TEMPLATE_INT', 'integer');
define('TEMPLATE_FLOAT', 'float');

// Session Keys
define('UI_PLAYLISTCONTROLLER_OBJ_SESSNAME', 'PLAYLISTCONTROLLER_OBJ');
/*define('UI_PLAYLIST_SESSNAME', 'PLAYLIST');
define('UI_BLOCK_SESSNAME', 'BLOCK');*/

//Sentry error logging
define('SENTRY_CONFIG_PATH', LIBRETIME_CONF_DIR . '/sentry.airtime_web.ini');

//TuneIn integration
define("TUNEIN_API_URL", "http://air.radiotime.com/Playing.ashx");

// SoundCloud
define('SOUNDCLOUD', 'SoundCloud');
define('DEFAULT_SOUNDCLOUD_LICENSE_TYPE', 'all-rights-reserved');
define('DEFAULT_SOUNDCLOUD_SHARING_TYPE', 'public');

// Celery
define('CELERY_PENDING_STATUS', 'PENDING');
define('CELERY_SUCCESS_STATUS', 'SUCCESS');
define('CELERY_FAILED_STATUS', 'FAILED');

// Celery Services
define('SOUNDCLOUD_SERVICE_NAME', 'soundcloud');
define('PODCAST_SERVICE_NAME', 'podcast');

// Publish Services
define('STATION_PODCAST_SERVICE_NAME', 'station_podcast');

// Podcast Types
//define('STATION_PODCAST', 0);
//define('IMPORTED_PODCAST', 1);

define('ITUNES_XML_NAMESPACE_URL', 'http://www.itunes.com/dtds/podcast-1.0.dtd');
