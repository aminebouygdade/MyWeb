<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/shopping_performance_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class ShoppingPerformanceView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v16/resources/shopping_performance_view.proto"google.ads.googleads.v16.resourcesgoogle/api/resource.proto"�
ShoppingPerformanceViewO
resource_name (	B8�A�A2
0googleads.googleapis.com/ShoppingPerformanceView:f�Ac
0googleads.googleapis.com/ShoppingPerformanceView/customers/{customer_id}/shoppingPerformanceViewB�
&com.google.ads.googleads.v16.resourcesBShoppingPerformanceViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

