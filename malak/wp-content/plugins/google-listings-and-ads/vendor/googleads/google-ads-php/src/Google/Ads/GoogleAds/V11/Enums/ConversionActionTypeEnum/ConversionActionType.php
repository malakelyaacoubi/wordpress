<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/conversion_action_type.proto

namespace Google\Ads\GoogleAds\V11\Enums\ConversionActionTypeEnum;

use UnexpectedValueException;

/**
 * Possible types of a conversion action.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.ConversionActionTypeEnum.ConversionActionType</code>
 */
class ConversionActionType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Conversions that occur when a user clicks on an ad's call extension.
     *
     * Generated from protobuf enum <code>AD_CALL = 2;</code>
     */
    const AD_CALL = 2;
    /**
     * Conversions that occur when a user on a mobile device clicks a phone
     * number.
     *
     * Generated from protobuf enum <code>CLICK_TO_CALL = 3;</code>
     */
    const CLICK_TO_CALL = 3;
    /**
     * Conversions that occur when a user downloads a mobile app from the Google
     * Play Store.
     *
     * Generated from protobuf enum <code>GOOGLE_PLAY_DOWNLOAD = 4;</code>
     */
    const GOOGLE_PLAY_DOWNLOAD = 4;
    /**
     * Conversions that occur when a user makes a purchase in an app through
     * Android billing.
     *
     * Generated from protobuf enum <code>GOOGLE_PLAY_IN_APP_PURCHASE = 5;</code>
     */
    const GOOGLE_PLAY_IN_APP_PURCHASE = 5;
    /**
     * Call conversions that are tracked by the advertiser and uploaded.
     *
     * Generated from protobuf enum <code>UPLOAD_CALLS = 6;</code>
     */
    const UPLOAD_CALLS = 6;
    /**
     * Conversions that are tracked by the advertiser and uploaded with
     * attributed clicks.
     *
     * Generated from protobuf enum <code>UPLOAD_CLICKS = 7;</code>
     */
    const UPLOAD_CLICKS = 7;
    /**
     * Conversions that occur on a webpage.
     *
     * Generated from protobuf enum <code>WEBPAGE = 8;</code>
     */
    const WEBPAGE = 8;
    /**
     * Conversions that occur when a user calls a dynamically-generated phone
     * number from an advertiser's website.
     *
     * Generated from protobuf enum <code>WEBSITE_CALL = 9;</code>
     */
    const WEBSITE_CALL = 9;
    /**
     * Store Sales conversion based on first-party or third-party merchant
     * data uploads.
     * Only customers on the allowlist can use store sales direct upload types.
     *
     * Generated from protobuf enum <code>STORE_SALES_DIRECT_UPLOAD = 10;</code>
     */
    const STORE_SALES_DIRECT_UPLOAD = 10;
    /**
     * Store Sales conversion based on first-party or third-party merchant
     * data uploads and/or from in-store purchases using cards from payment
     * networks.
     * Only customers on the allowlist can use store sales types.
     * Read only.
     *
     * Generated from protobuf enum <code>STORE_SALES = 11;</code>
     */
    const STORE_SALES = 11;
    /**
     * Android app first open conversions tracked via Firebase.
     *
     * Generated from protobuf enum <code>FIREBASE_ANDROID_FIRST_OPEN = 12;</code>
     */
    const FIREBASE_ANDROID_FIRST_OPEN = 12;
    /**
     * Android app in app purchase conversions tracked via Firebase.
     *
     * Generated from protobuf enum <code>FIREBASE_ANDROID_IN_APP_PURCHASE = 13;</code>
     */
    const FIREBASE_ANDROID_IN_APP_PURCHASE = 13;
    /**
     * Android app custom conversions tracked via Firebase.
     *
     * Generated from protobuf enum <code>FIREBASE_ANDROID_CUSTOM = 14;</code>
     */
    const FIREBASE_ANDROID_CUSTOM = 14;
    /**
     * iOS app first open conversions tracked via Firebase.
     *
     * Generated from protobuf enum <code>FIREBASE_IOS_FIRST_OPEN = 15;</code>
     */
    const FIREBASE_IOS_FIRST_OPEN = 15;
    /**
     * iOS app in app purchase conversions tracked via Firebase.
     *
     * Generated from protobuf enum <code>FIREBASE_IOS_IN_APP_PURCHASE = 16;</code>
     */
    const FIREBASE_IOS_IN_APP_PURCHASE = 16;
    /**
     * iOS app custom conversions tracked via Firebase.
     *
     * Generated from protobuf enum <code>FIREBASE_IOS_CUSTOM = 17;</code>
     */
    const FIREBASE_IOS_CUSTOM = 17;
    /**
     * Android app first open conversions tracked via Third Party App Analytics.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN = 18;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN = 18;
    /**
     * Android app in app purchase conversions tracked via Third Party App
     * Analytics.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE = 19;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE = 19;
    /**
     * Android app custom conversions tracked via Third Party App Analytics.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM = 20;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM = 20;
    /**
     * iOS app first open conversions tracked via Third Party App Analytics.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN = 21;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN = 21;
    /**
     * iOS app in app purchase conversions tracked via Third Party App
     * Analytics.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE = 22;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE = 22;
    /**
     * iOS app custom conversions tracked via Third Party App Analytics.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOM = 23;</code>
     */
    const THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOM = 23;
    /**
     * Conversions that occur when a user pre-registers a mobile app from the
     * Google Play Store. Read only.
     *
     * Generated from protobuf enum <code>ANDROID_APP_PRE_REGISTRATION = 24;</code>
     */
    const ANDROID_APP_PRE_REGISTRATION = 24;
    /**
     * Conversions that track all Google Play downloads which aren't tracked
     * by an app-specific type. Read only.
     *
     * Generated from protobuf enum <code>ANDROID_INSTALLS_ALL_OTHER_APPS = 25;</code>
     */
    const ANDROID_INSTALLS_ALL_OTHER_APPS = 25;
    /**
     * Floodlight activity that counts the number of times that users have
     * visited a particular webpage after seeing or clicking on one of
     * an advertiser's ads. Read only.
     *
     * Generated from protobuf enum <code>FLOODLIGHT_ACTION = 26;</code>
     */
    const FLOODLIGHT_ACTION = 26;
    /**
     * Floodlight activity that tracks the number of sales made or the number
     * of items purchased. Can also capture the total value of each sale.
     * Read only.
     *
     * Generated from protobuf enum <code>FLOODLIGHT_TRANSACTION = 27;</code>
     */
    const FLOODLIGHT_TRANSACTION = 27;
    /**
     * Conversions that track local actions from Google's products and
     * services after interacting with an ad. Read only.
     *
     * Generated from protobuf enum <code>GOOGLE_HOSTED = 28;</code>
     */
    const GOOGLE_HOSTED = 28;
    /**
     * Conversions reported when a user submits a lead form. Read only.
     *
     * Generated from protobuf enum <code>LEAD_FORM_SUBMIT = 29;</code>
     */
    const LEAD_FORM_SUBMIT = 29;
    /**
     * Conversions that come from Salesforce. Read only.
     *
     * Generated from protobuf enum <code>SALESFORCE = 30;</code>
     */
    const SALESFORCE = 30;
    /**
     * Conversions imported from Search Ads 360 Floodlight data. Read only.
     *
     * Generated from protobuf enum <code>SEARCH_ADS_360 = 31;</code>
     */
    const SEARCH_ADS_360 = 31;
    /**
     * Call conversions that occur on Smart campaign Ads without call tracking
     * setup, using Smart campaign custom criteria. Read only.
     *
     * Generated from protobuf enum <code>SMART_CAMPAIGN_AD_CLICKS_TO_CALL = 32;</code>
     */
    const SMART_CAMPAIGN_AD_CLICKS_TO_CALL = 32;
    /**
     * The user clicks on a call element within Google Maps. Smart campaign
     * only. Read only.
     *
     * Generated from protobuf enum <code>SMART_CAMPAIGN_MAP_CLICKS_TO_CALL = 33;</code>
     */
    const SMART_CAMPAIGN_MAP_CLICKS_TO_CALL = 33;
    /**
     * The user requests directions to a business location within Google Maps.
     * Smart campaign only. Read only.
     *
     * Generated from protobuf enum <code>SMART_CAMPAIGN_MAP_DIRECTIONS = 34;</code>
     */
    const SMART_CAMPAIGN_MAP_DIRECTIONS = 34;
    /**
     * Call conversions that occur on Smart campaign Ads with call tracking
     * setup, using Smart campaign custom criteria. Read only.
     *
     * Generated from protobuf enum <code>SMART_CAMPAIGN_TRACKED_CALLS = 35;</code>
     */
    const SMART_CAMPAIGN_TRACKED_CALLS = 35;
    /**
     * Conversions that occur when a user visits an advertiser's retail store.
     * Read only.
     *
     * Generated from protobuf enum <code>STORE_VISITS = 36;</code>
     */
    const STORE_VISITS = 36;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AD_CALL => 'AD_CALL',
        self::CLICK_TO_CALL => 'CLICK_TO_CALL',
        self::GOOGLE_PLAY_DOWNLOAD => 'GOOGLE_PLAY_DOWNLOAD',
        self::GOOGLE_PLAY_IN_APP_PURCHASE => 'GOOGLE_PLAY_IN_APP_PURCHASE',
        self::UPLOAD_CALLS => 'UPLOAD_CALLS',
        self::UPLOAD_CLICKS => 'UPLOAD_CLICKS',
        self::WEBPAGE => 'WEBPAGE',
        self::WEBSITE_CALL => 'WEBSITE_CALL',
        self::STORE_SALES_DIRECT_UPLOAD => 'STORE_SALES_DIRECT_UPLOAD',
        self::STORE_SALES => 'STORE_SALES',
        self::FIREBASE_ANDROID_FIRST_OPEN => 'FIREBASE_ANDROID_FIRST_OPEN',
        self::FIREBASE_ANDROID_IN_APP_PURCHASE => 'FIREBASE_ANDROID_IN_APP_PURCHASE',
        self::FIREBASE_ANDROID_CUSTOM => 'FIREBASE_ANDROID_CUSTOM',
        self::FIREBASE_IOS_FIRST_OPEN => 'FIREBASE_IOS_FIRST_OPEN',
        self::FIREBASE_IOS_IN_APP_PURCHASE => 'FIREBASE_IOS_IN_APP_PURCHASE',
        self::FIREBASE_IOS_CUSTOM => 'FIREBASE_IOS_CUSTOM',
        self::THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN => 'THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN',
        self::THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE => 'THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE',
        self::THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM => 'THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM',
        self::THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN => 'THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN',
        self::THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE => 'THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE',
        self::THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOM => 'THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOM',
        self::ANDROID_APP_PRE_REGISTRATION => 'ANDROID_APP_PRE_REGISTRATION',
        self::ANDROID_INSTALLS_ALL_OTHER_APPS => 'ANDROID_INSTALLS_ALL_OTHER_APPS',
        self::FLOODLIGHT_ACTION => 'FLOODLIGHT_ACTION',
        self::FLOODLIGHT_TRANSACTION => 'FLOODLIGHT_TRANSACTION',
        self::GOOGLE_HOSTED => 'GOOGLE_HOSTED',
        self::LEAD_FORM_SUBMIT => 'LEAD_FORM_SUBMIT',
        self::SALESFORCE => 'SALESFORCE',
        self::SEARCH_ADS_360 => 'SEARCH_ADS_360',
        self::SMART_CAMPAIGN_AD_CLICKS_TO_CALL => 'SMART_CAMPAIGN_AD_CLICKS_TO_CALL',
        self::SMART_CAMPAIGN_MAP_CLICKS_TO_CALL => 'SMART_CAMPAIGN_MAP_CLICKS_TO_CALL',
        self::SMART_CAMPAIGN_MAP_DIRECTIONS => 'SMART_CAMPAIGN_MAP_DIRECTIONS',
        self::SMART_CAMPAIGN_TRACKED_CALLS => 'SMART_CAMPAIGN_TRACKED_CALLS',
        self::STORE_VISITS => 'STORE_VISITS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionActionType::class, \Google\Ads\GoogleAds\V11\Enums\ConversionActionTypeEnum_ConversionActionType::class);

