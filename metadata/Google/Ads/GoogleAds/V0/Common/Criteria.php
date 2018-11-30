<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/criteria.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Common;

class Criteria
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AgeRangeType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ContentLabelType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\DayOfWeek::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\Device::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\GenderType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\HotelDateSelectionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\IncomeRangeType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\InteractionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\KeywordMatchType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ListingCustomAttributeIndex::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ListingGroupType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\MinuteOfHour::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ParentalStatusType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\PreferredContentType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ProductChannel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ProductChannelExclusivity::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ProductCondition::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ProductTypeLevel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ProximityRadiusUnits::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e380a2d676f6f676c652f6164732f676f6f676c656164732f76302f63" .
            "6f6d6d6f6e2f63726974657269612e70726f746f121e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e636f6d6d6f6e1a36676f6f676c65" .
            "2f6164732f676f6f676c656164732f76302f656e756d732f636f6e74656e" .
            "745f6c6162656c5f747970652e70726f746f1a2f676f6f676c652f616473" .
            "2f676f6f676c656164732f76302f656e756d732f6461795f6f665f776565" .
            "6b2e70726f746f1a2a676f6f676c652f6164732f676f6f676c656164732f" .
            "76302f656e756d732f6465766963652e70726f746f1a2f676f6f676c652f" .
            "6164732f676f6f676c656164732f76302f656e756d732f67656e6465725f" .
            "747970652e70726f746f1a3d676f6f676c652f6164732f676f6f676c6561" .
            "64732f76302f656e756d732f686f74656c5f646174655f73656c65637469" .
            "6f6e5f747970652e70726f746f1a35676f6f676c652f6164732f676f6f67" .
            "6c656164732f76302f656e756d732f696e636f6d655f72616e67655f7479" .
            "70652e70726f746f1a34676f6f676c652f6164732f676f6f676c65616473" .
            "2f76302f656e756d732f696e746572616374696f6e5f747970652e70726f" .
            "746f1a36676f6f676c652f6164732f676f6f676c656164732f76302f656e" .
            "756d732f6b6579776f72645f6d617463685f747970652e70726f746f1a42" .
            "676f6f676c652f6164732f676f6f676c656164732f76302f656e756d732f" .
            "6c697374696e675f637573746f6d5f6174747269627574655f696e646578" .
            "2e70726f746f1a36676f6f676c652f6164732f676f6f676c656164732f76" .
            "302f656e756d732f6c697374696e675f67726f75705f747970652e70726f" .
            "746f1a32676f6f676c652f6164732f676f6f676c656164732f76302f656e" .
            "756d732f6d696e7574655f6f665f686f75722e70726f746f1a38676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f656e756d732f70617265" .
            "6e74616c5f7374617475735f747970652e70726f746f1a3a676f6f676c65" .
            "2f6164732f676f6f676c656164732f76302f656e756d732f707265666572" .
            "7265645f636f6e74656e745f747970652e70726f746f1a33676f6f676c65" .
            "2f6164732f676f6f676c656164732f76302f656e756d732f70726f647563" .
            "745f6368616e6e656c2e70726f746f1a3f676f6f676c652f6164732f676f" .
            "6f676c656164732f76302f656e756d732f70726f647563745f6368616e6e" .
            "656c5f6578636c757369766974792e70726f746f1a35676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f656e756d732f70726f647563745f" .
            "636f6e646974696f6e2e70726f746f1a36676f6f676c652f6164732f676f" .
            "6f676c656164732f76302f656e756d732f70726f647563745f747970655f" .
            "6c6576656c2e70726f746f1a3a676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f656e756d732f70726f78696d6974795f7261646975735f" .
            "756e6974732e70726f746f1a1e676f6f676c652f70726f746f6275662f77" .
            "726170706572732e70726f746f2293010a0b4b6579776f7264496e666f12" .
            "2a0a047465787418012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512580a0a6d617463685f74797065180220" .
            "01280e32442e676f6f676c652e6164732e676f6f676c656164732e76302e" .
            "656e756d732e4b6579776f72644d6174636854797065456e756d2e4b6579" .
            "776f72644d6174636854797065223a0a0d506c6163656d656e74496e666f" .
            "12290a0375726c18012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756522490a0c4c6f636174696f6e496e666f12" .
            "390a1367656f5f7461726765745f636f6e7374616e7418012001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c7565224c" .
            "0a0a446576696365496e666f123e0a047479706518012001280e32302e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e656e756d732e44" .
            "6576696365456e756d2e44657669636522720a1450726566657272656443" .
            "6f6e74656e74496e666f125a0a047479706518022001280e324c2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e656e756d732e507265" .
            "666572726564436f6e74656e7454797065456e756d2e5072656665727265" .
            "64436f6e74656e745479706522f1010a104c697374696e6747726f757049" .
            "6e666f12520a047479706518012001280e32442e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e656e756d732e4c697374696e6747726f" .
            "757054797065456e756d2e4c697374696e6747726f75705479706512480a" .
            "0a636173655f76616c756518022001280b32342e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e636f6d6d6f6e2e4c697374696e674469" .
            "6d656e73696f6e496e666f123f0a19706172656e745f61645f67726f7570" .
            "5f637269746572696f6e18032001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c7565225c0a104c697374696e6753636f" .
            "7065496e666f12480a0a64696d656e73696f6e7318022003280b32342e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e" .
            "4c697374696e6744696d656e73696f6e496e666f22db070a144c69737469" .
            "6e6744696d656e73696f6e496e666f12490a0d6c697374696e675f627261" .
            "6e6418012001280b32302e676f6f676c652e6164732e676f6f676c656164" .
            "732e76302e636f6d6d6f6e2e4c697374696e674272616e64496e666f4800" .
            "123f0a08686f74656c5f696418022001280b322b2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e636f6d6d6f6e2e486f74656c496449" .
            "6e666f480012450a0b686f74656c5f636c61737318032001280b322e2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e" .
            "486f74656c436c617373496e666f480012560a14686f74656c5f636f756e" .
            "7472795f726567696f6e18042001280b32362e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e636f6d6d6f6e2e486f74656c436f756e74" .
            "7279526567696f6e496e666f480012450a0b686f74656c5f737461746518" .
            "052001280b322e2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e636f6d6d6f6e2e486f74656c5374617465496e666f480012430a0a68" .
            "6f74656c5f6369747918062001280b322d2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e636f6d6d6f6e2e486f74656c43697479496e" .
            "666f4800125e0a186c697374696e675f637573746f6d5f61747472696275" .
            "746518072001280b323a2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76302e636f6d6d6f6e2e4c697374696e67437573746f6d4174747269" .
            "62757465496e666f4800124d0a0f70726f647563745f6368616e6e656c18" .
            "082001280b32322e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e636f6d6d6f6e2e50726f647563744368616e6e656c496e666f480012" .
            "640a1b70726f647563745f6368616e6e656c5f6578636c75736976697479" .
            "18092001280b323d2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76302e636f6d6d6f6e2e50726f647563744368616e6e656c4578636c7573" .
            "6976697479496e666f480012510a1170726f647563745f636f6e64697469" .
            "6f6e180a2001280b32342e676f6f676c652e6164732e676f6f676c656164" .
            "732e76302e636f6d6d6f6e2e50726f64756374436f6e646974696f6e496e" .
            "666f4800124e0a1070726f647563745f6f666665725f6964180b2001280b" .
            "32322e676f6f676c652e6164732e676f6f676c656164732e76302e636f6d" .
            "6d6f6e2e50726f647563744f666665724964496e666f480012470a0c7072" .
            "6f647563745f74797065180c2001280b322f2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e636f6d6d6f6e2e50726f64756374547970" .
            "65496e666f4800420b0a0964696d656e73696f6e223f0a104c697374696e" .
            "674272616e64496e666f122b0a0576616c756518012001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565223a0a0b48" .
            "6f74656c4964496e666f122b0a0576616c756518012001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565223c0a0e48" .
            "6f74656c436c617373496e666f122a0a0576616c756518012001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756522580a" .
            "16486f74656c436f756e747279526567696f6e496e666f123e0a18636f75" .
            "6e7472795f726567696f6e5f637269746572696f6e18012001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756522470a" .
            "0e486f74656c5374617465496e666f12350a0f73746174655f6372697465" .
            "72696f6e18012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756522450a0d486f74656c43697479496e666f12340a" .
            "0e636974795f637269746572696f6e18012001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756522b4010a1a4c697374" .
            "696e67437573746f6d417474726962757465496e666f122b0a0576616c75" .
            "6518012001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512690a05696e64657818022001280e325a2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e656e756d732e4c69737469" .
            "6e67437573746f6d417474726962757465496e646578456e756d2e4c6973" .
            "74696e67437573746f6d417474726962757465496e64657822670a125072" .
            "6f647563744368616e6e656c496e666f12510a076368616e6e656c180120" .
            "01280e32402e676f6f676c652e6164732e676f6f676c656164732e76302e" .
            "656e756d732e50726f647563744368616e6e656c456e756d2e50726f6475" .
            "63744368616e6e656c2294010a1d50726f647563744368616e6e656c4578" .
            "636c75736976697479496e666f12730a136368616e6e656c5f6578636c75" .
            "73697669747918012001280e32562e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76302e656e756d732e50726f647563744368616e6e656c45" .
            "78636c75736976697479456e756d2e50726f647563744368616e6e656c45" .
            "78636c75736976697479226f0a1450726f64756374436f6e646974696f6e" .
            "496e666f12570a09636f6e646974696f6e18012001280e32442e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e656e756d732e50726f64" .
            "756374436f6e646974696f6e456e756d2e50726f64756374436f6e646974" .
            "696f6e22410a1250726f647563744f666665724964496e666f122b0a0576" .
            "616c756518012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c75652293010a0f50726f6475637454797065496e666f" .
            "122b0a0576616c756518012001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512530a056c6576656c18022001280e" .
            "32442e676f6f676c652e6164732e676f6f676c656164732e76302e656e75" .
            "6d732e50726f64756374547970654c6576656c456e756d2e50726f647563" .
            "74547970654c6576656c227c0a1a486f74656c4461746553656c65637469" .
            "6f6e54797065496e666f125e0a047479706518012001280e32502e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e656e756d732e486f74" .
            "656c4461746553656c656374696f6e54797065456e756d2e486f74656c44" .
            "61746553656c656374696f6e54797065227d0a1d486f74656c416476616e" .
            "6365426f6f6b696e6757696e646f77496e666f122d0a086d696e5f646179" .
            "7318012001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565122d0a086d61785f6461797318022001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c756522790a15486f74" .
            "656c4c656e6774684f6653746179496e666f122f0a0a6d696e5f6e696768" .
            "747318012001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c7565122f0a0a6d61785f6e696768747318022001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74363456616c756522620a13" .
            "486f74656c436865636b496e446179496e666f124b0a0b6461795f6f665f" .
            "7765656b18012001280e32362e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e656e756d732e4461794f665765656b456e756d2e446179" .
            "4f665765656b22670a13496e746572616374696f6e54797065496e666f12" .
            "500a047479706518012001280e32422e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e656e756d732e496e746572616374696f6e547970" .
            "65456e756d2e496e746572616374696f6e5479706522e3020a0e41645363" .
            "686564756c65496e666f12520a0c73746172745f6d696e75746518012001" .
            "280e323c2e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "6e756d732e4d696e7574654f66486f7572456e756d2e4d696e7574654f66" .
            "486f757212500a0a656e645f6d696e75746518022001280e323c2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e656e756d732e4d696e" .
            "7574654f66486f7572456e756d2e4d696e7574654f66486f7572122f0a0a" .
            "73746172745f686f757218032001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74333256616c7565122d0a08656e645f686f7572180420" .
            "01280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c" .
            "7565124b0a0b6461795f6f665f7765656b18052001280e32362e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e656e756d732e4461794f" .
            "665765656b456e756d2e4461794f665765656b225a0a0c41676552616e67" .
            "65496e666f124a0a047479706518012001280e323c2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e656e756d732e41676552616e6765" .
            "54797065456e756d2e41676552616e67655479706522540a0a47656e6465" .
            "72496e666f12460a047479706518012001280e32382e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e656e756d732e47656e6465725479" .
            "7065456e756d2e47656e6465725479706522630a0f496e636f6d6552616e" .
            "6765496e666f12500a047479706518012001280e32422e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e656e756d732e496e636f6d6552" .
            "616e676554797065456e756d2e496e636f6d6552616e676554797065226c" .
            "0a12506172656e74616c537461747573496e666f12560a04747970651801" .
            "2001280e32482e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e656e756d732e506172656e74616c53746174757354797065456e756d2e" .
            "506172656e74616c5374617475735479706522420a10596f755475626556" .
            "6964656f496e666f122e0a08766964656f5f696418012001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756522460a12" .
            "596f75547562654368616e6e656c496e666f12300a0a6368616e6e656c5f" .
            "696418012001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c7565223f0a0c557365724c697374496e666f122f0a097573" .
            "65725f6c69737418012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756522a0020a0d50726f78696d697479496e66" .
            "6f123f0a0967656f5f706f696e7418012001280b322c2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e636f6d6d6f6e2e47656f506f69" .
            "6e74496e666f122c0a0672616469757318022001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c756512620a0c72616469" .
            "75735f756e69747318032001280e324c2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e656e756d732e50726f78696d69747952616469" .
            "7573556e697473456e756d2e50726f78696d697479526164697573556e69" .
            "7473123c0a076164647265737318042001280b322b2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e636f6d6d6f6e2e41646472657373" .
            "496e666f228f010a0c47656f506f696e74496e666f123f0a1a6c6f6e6769" .
            "747564655f696e5f6d6963726f5f6465677265657318012001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74333256616c7565123e0a19" .
            "6c617469747564655f696e5f6d6963726f5f646567726565731802200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e496e74333256616c7565" .
            "22fc020a0b41646472657373496e666f12310a0b706f7374616c5f636f64" .
            "6518012001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512330a0d70726f76696e63655f636f646518022001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12320a0c636f756e7472795f636f646518032001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512330a0d70726f76" .
            "696e63655f6e616d6518042001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512340a0e7374726565745f61646472" .
            "65737318052001280b321c2e676f6f676c652e70726f746f6275662e5374" .
            "72696e6756616c756512350a0f7374726565745f61646472657373321806" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c7565122f0a09636974795f6e616d6518072001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c7565226d0a09546f70" .
            "6963496e666f12340a0e746f7069635f636f6e7374616e7418012001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "122a0a047061746818022003280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c756522470a0c4c616e6775616765496e666f" .
            "12370a116c616e67756167655f636f6e7374616e7418012001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c7565223f0a" .
            "0b4970426c6f636b496e666f12300a0a69705f6164647265737318012001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756522660a10436f6e74656e744c6162656c496e666f12520a0474797065" .
            "18012001280e32442e676f6f676c652e6164732e676f6f676c656164732e" .
            "76302e656e756d732e436f6e74656e744c6162656c54797065456e756d2e" .
            "436f6e74656e744c6162656c5479706522450a0b43617272696572496e66" .
            "6f12360a10636172726965725f636f6e7374616e7418012001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756522500a" .
            "1055736572496e746572657374496e666f123c0a16757365725f696e7465" .
            "726573745f63617465676f727918012001280b321c2e676f6f676c652e70" .
            "726f746f6275662e537472696e6756616c756542c3010a22636f6d2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e420d" .
            "437269746572696150726f746f50015a44676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f67" .
            "6f6f676c656164732f76302f636f6d6d6f6e3b636f6d6d6f6ea202034741" .
            "41aa021e476f6f676c652e4164732e476f6f676c654164732e56302e436f" .
            "6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c5630" .
            "5c436f6d6d6f6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

