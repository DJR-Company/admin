<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'barryvdh/laravel-debugbar' => 'v3.7.0@3372ed65e6d2039d663ed19aa699956f9d346271',
  'barryvdh/laravel-dompdf' => 'v0.9.0@5b99e1f94157d74e450f4c97e8444fcaffa2144b',
  'box/spout' => 'v3.3.0@9bdb027d312b732515b884a341c0ad70372c6295',
  'brian2694/laravel-toastr' => '5.57@1274f58564b9d845dfe82d5aca60b99b6fbb5a71',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'carlos-meneses/laravel-mpdf' => '2.1.11@cb52e5c17df9caa340eaed8566cfb1e3c7b37c33',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/semver' => '3.3.2@3953f23262f2bff1919fc82183ad9acb13ff62c9',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'dgvai/laravel-sslcommerz' => '1.0.4@b357221d2513be692f45e7587b4fdf0b169364c8',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/persistence' => '3.1.4@8bf8ab15960787f1a49d405f6eb8c787b4841119',
  'dompdf/dompdf' => 'v1.2.2@5031045d9640b38cfc14aac9667470df09c9e090',
  'dragonmantank/cron-expression' => 'v2.3.1@65b2d8ee1f10915efb3b55597da3404f096acba2',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'evenement/evenement' => 'v3.0.1@531bfb9d15f8aa57454f5f0285b18bec903b8fb7',
  'ezyang/htmlpurifier' => 'v4.16.0@523407fb06eb9e5f3d59889b3978d5bfe94299c8',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'fig/http-message-util' => '1.1.5@9d94dc0154230ac39e5bf89398b324a86f63f765',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'google/auth' => 'v1.25.0@0865c44ab50378f7b145827dfcbd1e7a238f7759',
  'google/cloud-core' => 'v1.49.2@18d37b0b9fa761eaff909f360f96efa9ca2d6ca7',
  'google/cloud-storage' => 'v1.30.2@b7f74ec1b701d56945cbc6c20345e2d21b1b3545',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'gregwar/captcha' => 'v1.1.9@4bb668e6b40e3205a020ca5ee4ca8cff8b8780c5',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '2.4.4@3cf1b6d4f0c820a2cf8bcaec39fc698f3443b5cf',
  'icecave/repr' => '4.0.0@3dad35ee43394404ae0f1926d754e7b7820da8e4',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'kingflamez/laravelrave' => 'v4.2.0@02ccc18e5f03fb25a12f898ddd180d88d0ed13d9',
  'kreait/clock' => '1.2@49e103382ca36cb2bc2e86ff3b8d11d44d0e0b31',
  'kreait/firebase-php' => '5.26.4@01c129ee628dc988b1da4b6cbaf1ee421d951aed',
  'kreait/firebase-tokens' => '1.17.0@cad73174508a20961bae72a4c4a621208be83ee4',
  'kreait/laravel-firebase' => '3.4.0@e2110842cb08e48642116e2a9b719c81c80c83be',
  'laminas/laminas-diactoros' => '2.17.0@5b32597aa46b83c8b85bb1cf9a6ed4fe7dd980c5',
  'laravel/framework' => 'v7.30.6@ecdafad1dda3c790af186a6d18479ea4757ef9ee',
  'laravel/passport' => 'v9.4.0@011bd500e8ae3d459b692467880a49ff1ecd60c0',
  'laravel/tinker' => 'v2.8.1@04a2d3bd0d650c0764f70bf49d1ee39393e4eb10',
  'laravel/ui' => 'v2.4.0@f5398544a9cd4804a42d09ce51735e37cd51ea2d',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.3.0@4d7de2fe0d51a96418c0d04004986e410e87f6b4',
  'league/commonmark' => '1.6.7@2b8185c13bc9578367a5bf901881d1c1b5bbd09b',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth2-server' => '8.4.0@539f4340c14eca8d44578fd118f6bdc0ad16d1ce',
  'league/uri' => '6.7.2@d3b50812dd51f3fbf176344cc2981db03d10fe06',
  'league/uri-interfaces' => '2.3.0@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'maatwebsite/excel' => '3.1.48@6d0fe2a1d195960c7af7bf0de760582da02a34b9',
  'madnest/madzipper' => 'v1.1.1@788211daf4555ecdacee341816720437d169c0cc',
  'maennchen/zipstream-php' => '2.2.6@30ad6f93cf3efe4192bc7a4c9cad11ff8f4f237f',
  'markbaker/complex' => '3.0.2@95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
  'markbaker/matrix' => '3.0.1@728434227fe21be27ff6d86621a1b13107a2562c',
  'maximebf/debugbar' => 'v1.18.2@17dcf3f6ed112bb85a37cf13538fd8de49f5c274',
  'mercadopago/dx-php' => '2.4.4@678f1e059309c5340f928df909e6b747caed2116',
  'monolog/monolog' => '2.9.1@f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
  'mpdf/mpdf' => 'v8.1.4@add590e93b7502efafd9839a68cff99f3497b318',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'myclabs/php-enum' => '1.8.4@a867478eae49c9f59ece437ae7f9506bfaa27483',
  'nesbot/carbon' => '2.66.0@496712849902241f04902033b0441b269effe001',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nikic/php-parser' => 'v4.15.4@6bb5176bc4af8bcb7d926f88718db9b96a2d4290',
  'nyholm/psr7' => '1.5.1@f734364e38a876a23be4d906a2a089e1315be18a',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.4.1@4498b5df7b08e8469f0f8279651ea5de9626ed02',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpoffice/phpspreadsheet' => '1.28.0@6e81cf39bbd93ebc3a4e8150444c41e8aa9b769a',
  'phpoption/phpoption' => '1.9.1@dd3a383e599f49777d8b628dadbb90cae435b87e',
  'phpseclib/phpseclib' => '2.0.42@665d289f59e646a259ebf13f29be7f6f54cab24b',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.12@52cb7c47d403c31c0adc9bf7710fc355f93c20f7',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.3.0@ad7475d1c9e70b190ecffc58f2d989416af339b4',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'rap2hpoutre/fast-excel' => 'v3.2.0@28183f3a90179386bfadcd0083129c247ce49fbe',
  'ratchet/pawl' => 'v0.4.1@af70198bab77a582b31169d3cc3982bed25c161f',
  'ratchet/rfc6455' => 'v0.3.1@7c964514e93456a52a99a20fcfa0de242a43ccdb',
  'razorpay/razorpay' => '2.8.5@31027cfb689b9480d67419dbec7c203097e9d9ac',
  'react/cache' => 'v1.2.0@d47c472b64aa5608225f47965a484b75c7817d5b',
  'react/dns' => 'v1.10.0@a5427e7dfa47713e438016905605819d101f238c',
  'react/event-loop' => 'v1.3.0@187fb56f46d424afb6ec4ad089269c72eec2e137',
  'react/promise' => 'v2.9.0@234f8fd1023c9158e2314fa9d7d0e6a83db42910',
  'react/promise-timer' => 'v1.9.0@aa7a73c74b8d8c0f622f5982ff7b0351bc29e495',
  'react/socket' => 'v1.12.0@81e1b4d7f5450ebd8d2e9a95bb008bb15ca95a7b',
  'react/stream' => 'v1.2.0@7a423506ee1903e89f1e08ec5f0ed430ff784ae9',
  'recoil/api' => '1.0.2@4f9b3f2638157e277606fe51718c3a0106da7807',
  'recoil/kernel' => '1.0.5@aa80bf44a25a5be5c1fa7a2bb53def27a81fc188',
  'recoil/react' => '1.0.3@a928961155f2663a735fb03aa1c4941a3f70ff1a',
  'riverline/multipart-parser' => '2.0.9@ebba10245b5a6e03a673ff52c547d05029caedab',
  'rize/uri-template' => '0.3.5@5ed4ba8ea34af84485dea815d4b6b620794d1168',
  'rmccue/requests' => 'v2.0.5@b717f1d2f4ef7992ec0c127747ed8b7e170c2f49',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'setasign/fpdi' => 'v2.3.7@bccc892d5fa1f48c43f8ba7db5ed4ba6f30c8c05',
  'signalwire/signalwire' => 'v2.3.10@b224ece32bc9b817d538fa6eefdbf7cc3003c068',
  'stella-maris/clock' => '0.1.7@fa23ce16019289a18bb3446fdecd45befcdd94f8',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/cache' => 'v5.4.21@32cab695bf99c63aff7d27ac67919944c00530ed',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/console' => 'v5.4.21@c77433ddc6cdc689caf48065d9ea22ca0853fbd9',
  'symfony/css-selector' => 'v5.4.21@95f3c7468db1da8cc360b24fa2a26e7cefcb355d',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/error-handler' => 'v5.4.21@56a94aa8cb5a5fbc411551d8d014a296b5456549',
  'symfony/event-dispatcher' => 'v5.4.21@f0ae1383a8285dfc6752b8d8602790953118ff5a',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/finder' => 'v5.4.21@078e9a5e1871fcfe6a5ce421b539344c21afef19',
  'symfony/http-foundation' => 'v5.4.21@3bb6ee5582366c4176d5ce596b380117c8200bbf',
  'symfony/http-kernel' => 'v5.4.21@09c19fc7e4218fbcf73fe0330eea38d66064b775',
  'symfony/mime' => 'v5.4.21@ef57d9fb9cdd5e6b2ffc567d109865d10b6920cd',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/process' => 'v5.4.21@d4ce417ebcb0b7d090b4c178ed6d3accc518e8bd',
  'symfony/psr-http-message-bridge' => 'v2.1.4@a125b93ef378c492e274f217874906fb9babdebb',
  'symfony/routing' => 'v5.4.21@2ea0f3049076e8ef96eab203a809d6b2332f0361',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v5.4.21@edac10d167b78b1d90f46a80320d632de0bd9f2f',
  'symfony/translation' => 'v5.4.21@6996affeea65705086939894b77110e9a7f80874',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v5.4.21@6c5ac3a1be8b849d59a1a77877ee110e1b55eb74',
  'symfony/var-exporter' => 'v5.4.21@be74908a6942fdd331554b3cec27ff41b45ccad4',
  'tijsverkoyen/css-to-inline-styles' => '2.2.6@c42125b83a4fa63b187fdf29f9c93cb7733da30c',
  'twilio/sdk' => '6.44.4@08aad5f377e2245b9cd7508e7762d95e7392fa4d',
  'unicodeveloper/laravel-paystack' => '1.1.0@4c50abd6902463c7688a51efaef3c2a2147f6860',
  'vlucas/phpdotenv' => 'v4.3.0@67a491df68208bef8c37092db11fa3885008efcf',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.2@e9f63cd468b7e0edd73d0c90d0406d6b961f9eb7',
  'doctrine/instantiator' => '1.5.0@0a0fa9780f5d4e507415a065172d26a98d02047b',
  'facade/flare-client-php' => '1.10.0@213fa2c69e120bca4c51ba3e82ed1834ef3f41b8',
  'facade/ignition' => '2.17.7@b4f5955825bb4b74cba0f94001761c46335c33e9',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'filp/whoops' => '2.15.1@e864ac957acd66e1565f25efda61e37791a5db0b',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'mockery/mockery' => '1.5.1@e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
  'nunomaduro/collision' => 'v4.3.0@7c125dc2463f3e144ddc7e05e63077109508c94e',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '7.0.15@819f92bba8b001d4363065928088de22f25a3a48',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '4.0.4@a853a0e183b9db7eed023d7933a858fa1c8d25a3',
  'phpunit/phpunit' => '8.5.33@7d1ff0e8c6b35db78ff13e3e05517d7cbf7aa32e',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.5@1dc7ceb4a24aede938c7af2a9ed1de09609ca770',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.5@73a9676f2833b9a7c36968f9d882589cd75511e6',
  'sebastian/global-state' => '3.0.2@de036ec91d55d2a9e0db2ba975b512cdb1c23921',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-develop@acfb03871f128d5f8ba0f34faeae4f8fc3c9280f',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
