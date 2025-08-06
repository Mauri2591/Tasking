# Prism Changelog

## 1.26.0 (2022-01-06)

### New components

* __Atmel AVR Assembly__ ([#2078](http://github.com/PrismJS/prism/issues/2078)) [`b5a70e4c`](http://github.com/PrismJS/prism/commit/b5a70e4c)
* __Go module__ ([#3209](http://github.com/PrismJS/prism/issues/3209)) [`8476a9ab`](http://github.com/PrismJS/prism/commit/8476a9ab)
* __Keepalived Configure__ ([#2417](http://github.com/PrismJS/prism/issues/2417)) [`d908e457`](http://github.com/PrismJS/prism/commit/d908e457)
* __Tremor__ & __Trickle__ & __Troy__ ([#3087](http://github.com/PrismJS/prism/issues/3087)) [`ec25ba65`](http://github.com/PrismJS/prism/commit/ec25ba65)
* __Web IDL__ ([#3107](http://github.com/PrismJS/prism/issues/3107)) [`ef53f021`](http://github.com/PrismJS/prism/commit/ef53f021)

### Updated components

* Use `\d` for `[0-9]` ([#3097](http://github.com/PrismJS/prism/issues/3097)) [`9fe2f93e`](http://github.com/PrismJS/prism/commit/9fe2f93e)
* __6502 Assembly__
    * Use standard tokens and minor improvements ([#3184](http://github.com/PrismJS/prism/issues/3184)) [`929c33e0`](http://github.com/PrismJS/prism/commit/929c33e0)
* __AppleScript__
    * Use `class-name` standard token ([#3182](http://github.com/PrismJS/prism/issues/3182)) [`9f5e511d`](http://github.com/PrismJS/prism/commit/9f5e511d)
* __AQL__
    * Differentiate between strings and identifiers ([#3183](http://github.com/PrismJS/prism/issues/3183)) [`fa540ab7`](http://github.com/PrismJS/prism/commit/fa540ab7)
* __Arduino__
    * Added `ino` alias ([#2990](http://github.com/PrismJS/prism/issues/2990)) [`5b7ce5e4`](http://github.com/PrismJS/prism/commit/5b7ce5e4)
* __Avro IDL__
    * Removed char syntax ([#3185](http://github.com/PrismJS/prism/issues/3185)) [`c7809285`](http://github.com/PrismJS/prism/commit/c7809285)
* __Bash__
    * Added `node` to known commands ([#3291](http://github.com/PrismJS/prism/issues/3291)) [`4b19b502`](http://github.com/PrismJS/prism/commit/4b19b502)
    * Added `vcpkg` command ([#3282](http://github.com/PrismJS/prism/issues/3282)) [`b351bc69`](http://github.com/PrismJS/prism/commit/b351bc69)
    * Added `docker` and `podman` commands ([#3237](http://github.com/PrismJS/prism/issues/3237)) [`8c5ed251`](http://github.com/PrismJS/prism/commit/8c5ed251)
* __Birb__
    * Fixed class name false positives ([#3111](http://github.com/PrismJS/prism/issues/3111)) [`d7017beb`](http://github.com/PrismJS/prism/commit/d7017beb)
* __Bro__
    * Removed `variable` and minor improvements ([#3186](http://github.com/PrismJS/prism/issues/3186)) [`4cebf34c`](http://github.com/PrismJS/prism/commit/4cebf34c)
* __BSL (1C:Enterprise)__
    * Made `directive` greedy ([#3112](http://github.com/PrismJS/prism/issues/3112)) [`5c412cbb`](http://github.com/PrismJS/prism/commit/5c412cbb)
* __C__
    * Added `char` token ([#3207](http://github.com/PrismJS/prism/issues/3207)) [`d85a64ae`](http://github.com/PrismJS/prism/commit/d85a64ae)
* __C#__
    * Added `char` token ([#3270](http://github.com/PrismJS/prism/issues/3270)) [`220bc40f`](http://github.com/PrismJS/prism/commit/220bc40f)
    * Move everything into the IIFE ([#3077](http://github.com/PrismJS/prism/issues/3077)) [`9ed4cf6e`](http://github.com/PrismJS/prism/commit/9ed4cf6e)
* __Clojure__
    * Added `char` token ([#3188](http://github.com/PrismJS/prism/issues/3188)) [`1c88c7da`](http://github.com/PrismJS/prism/commit/1c88c7da)
* __Concurnas__
    * Improved tokenization ([#3189](http://github.com/PrismJS/prism/issues/3189)) [`7b34e65d`](http://github.com/PrismJS/prism/commit/7b34e65d)
* __Content-Security-Policy__
    * Improved tokenization ([#3276](http://github.com/PrismJS/prism/issues/3276)) [`a943f2bb`](http://github.com/PrismJS/prism/commit/a943f2bb)
* __Coq__
    * Improved attribute pattern performance ([#3085](http://github.com/PrismJS/prism/issues/3085)) [`2f9672aa`](http://github.com/PrismJS/prism/commit/2f9672aa)
* __Crystal__
    * Improved tokenization ([#3194](http://github.com/PrismJS/prism/issues/3194)) [`51e3ecc0`](http://github.com/PrismJS/prism/commit/51e3ecc0)
* __Cypher__
    * Removed non-standard use of `symbol` token name ([#3195](http://github.com/PrismJS/prism/issues/3195)) [`6af8a644`](http://github.com/PrismJS/prism/commit/6af8a644)
* __D__
    * Added standard char token ([#3196](http://github.com/PrismJS/prism/issues/3196)) [`dafdbdec`](http://github.com/PrismJS/prism/commit/dafdbdec)
* __Dart__
    * Added string interpolation and improved metadata ([#3197](http://github.com/PrismJS/prism/issues/3197)) [`e1370357`](http://github.com/PrismJS/prism/commit/e1370357)
* __DataWeave__
    * Fixed keywords being highlighted as functions ([#3113](http://github.com/PrismJS/prism/issues/3113)) [`532212b2`](http://github.com/PrismJS/prism/commit/532212b2)
* __EditorConfig__
    * Swap out `property` for `key`; alias with `attr-name` ([#3272](http://github.com/PrismJS/prism/issues/3272)) [`bee6ad56`](http://github.com/PrismJS/prism/commit/bee6ad56)
* __Eiffel__
    * Removed non-standard use of `builtin` name ([#3198](http://github.com/PrismJS/prism/issues/3198)) [`6add768b`](http://github.com/PrismJS/prism/commit/6add768b)
* __Elm__
    * Recognize unicode escapes as valid Char ([#3105](http://github.com/PrismJS/prism/issues/3105)) [`736c581d`](http://github.com/PrismJS/prism/commit/736c581d)
* __ERB__
    * Better embedding of Ruby ([#3192](http://github.com/PrismJS/prism/issues/3192)) [`336edeea`](http://github.com/PrismJS/prism/commit/336edeea)
* __F#__
    * Added `char` token ([#3271](http://github.com/PrismJS/prism/issues/3271)) [`b58cd722`](http://github.com/PrismJS/prism/commit/b58cd722)
* __G-code__
    * Use standard-conforming alias for checksum ([#3205](http://github.com/PrismJS/prism/issues/3205)) [`ee7ab563`](http://github.com/PrismJS/prism/commit/ee7ab563)
* __GameMaker Language__
    * Fixed `operator` token and added tests ([#3114](http://github.com/PrismJS/prism/issues/3114)) [`d359eeae`](http://github.com/PrismJS/prism/commit/d359eeae)
* __Go__
    * Added `char` token and improved `string` and `number` tokens ([#3208](http://github.com/PrismJS/prism/issues/3208)) [`f11b86e2`](http://github.com/PrismJS/prism/commit/f11b86e2)
* __GraphQL__
    * Optimized regexes ([#3136](http://github.com/PrismJS/prism/issues/3136)) [`8494519e`](http://github.com/PrismJS/prism/commit/8494519e)
* __Haml__
    * Use `symbol` alias for filter names ([#3210](http://github.com/PrismJS/prism/issues/3210)) [`3d410670`](http://github.com/PrismJS/prism/commit/3d410670)
    * Improved filter and interpolation tokenization ([#3191](http://github.com/PrismJS/prism/issues/3191)) [`005ba469`](http://github.com/PrismJS/prism/commit/005ba469)
* __Haxe__
    * Improved tokenization ([#3211](http://github.com/PrismJS/prism/issues/3211)) [`f41bcf23`](http://github.com/PrismJS/prism/commit/f41bcf23)
* __Hoon__
    * Simplified the language definition a little ([#3212](http://github.com/PrismJS/prism/issues/3212)) [`81920b62`](http://github.com/PrismJS/prism/commit/81920b62)
* __HTTP__
    * Added support for special header value tokenization ([#3275](http://github.com/PrismJS/prism/issues/3275)) [`3362fc79`](http://github.com/PrismJS/prism/commit/3362fc79)
    * Relax pattern for body ([#3169](http://github.com/PrismJS/prism/issues/3169)) [`22d0c6ba`](http://github.com/PrismJS/prism/commit/22d0c6ba)
* __HTTP Public-Key-Pins__
    * Improved tokenization ([#3278](http://github.com/PrismJS/prism/issues/3278)) [`0f1b5810`](http://github.com/PrismJS/prism/commit/0f1b5810)
* __HTTP Strict-Transport-Security__
    * Improved tokenization ([#3277](http://github.com/PrismJS/prism/issues/3277)) [`3d708b97`](http://github.com/PrismJS/prism/commit/3d708b97)
* __Idris__
    * Fixed import statements ([#3115](http://github.com/PrismJS/prism/issues/3115)) [`15cb3b78`](http://github.com/PrismJS/prism/commit/15cb3b78)
* __Io__
    * Simplified comment token ([#3214](http://github.com/PrismJS/prism/issues/3214)) [`c2afa59b`](http://github.com/PrismJS/prism/commit/c2afa59b)
* __J__
    * Made comments greedy ([#3215](http://github.com/PrismJS/prism/issues/3215)) [`5af16014`](http://github.com/PrismJS/prism/commit/5af16014)
* __Java__
    * Added `char` token ([#3217](http://github.com/PrismJS/prism/issues/3217)) [`0a9f909c`](http://github.com/PrismJS/prism/commit/0a9f909c)
* __Java stack trace__
    * Removed unreachable parts of regexes ([#3219](http://github.com/PrismJS/prism/issues/3219)) [`fa55492b`](http://github.com/PrismJS/prism/commit/fa55492b)
    * Added missing lookbehinds ([#3116](http://github.com/PrismJS/prism/issues/3116)) [`cfb2e782`](http://github.com/PrismJS/prism/commit/cfb2e782)
* __JavaScript__
    * Improved `number` pattern ([#3149](http://github.com/PrismJS/prism/issues/3149)) [`5a24cbff`](http://github.com/PrismJS/prism/commit/5a24cbff)
    * Added properties ([#3099](http://github.com/PrismJS/prism/issues/3099)) [`3b2238fa`](http://github.com/PrismJS/prism/commit/3b2238fa)
* __Jolie__
    * Improved tokenization ([#3221](http://github.com/PrismJS/prism/issues/3221)) [`dfbb2020`](http://github.com/PrismJS/prism/commit/dfbb2020)
* __JQ__
    * Improved performance of strings ([#3084](http://github.com/PrismJS/prism/issues/3084)) [`233415b8`](http://github.com/PrismJS/prism/commit/233415b8)
* __JS stack trace__
    * Added missing boundary assertion ([#3117](http://github.com/PrismJS/prism/issues/3117)) [`23d9aec1`](http://github.com/PrismJS/prism/commit/23d9aec1)
* __Julia__
    * Added `char` token ([#3223](http://github.com/PrismJS/prism/issues/3223)) [`3a876df0`](http://github.com/PrismJS/prism/commit/3a876df0)
* __Keyman__
    * Improved tokenization ([#3224](http://github.com/PrismJS/prism/issues/3224)) [`baa95cab`](http://github.com/PrismJS/prism/commit/baa95cab)
* __Kotlin__
    * Added `char` token and improved string interpolation ([#3225](http://github.com/PrismJS/prism/issues/3225)) [`563cd73e`](http://github.com/PrismJS/prism/commit/563cd73e)
* __Latte__
    * Use standard token names and combined delimiter tokens ([#3226](http://github.com/PrismJS/prism/issues/3226)) [`6b168a3b`](http://github.com/PrismJS/prism/commit/6b168a3b)
* __Liquid__
    * Removed unmatchable object variants ([#3135](http://github.com/PrismJS/prism/issues/3135)) [`05e7ab04`](http://github.com/PrismJS/prism/commit/05e7ab04)
* __Lisp__
    * Improved `defun` ([#3130](http://github.com/PrismJS/prism/issues/3130)) [`e8f84a6c`](http://github.com/PrismJS/prism/commit/e8f84a6c)
* __Makefile__
    * Use standard token names correctly ([#3227](http://github.com/PrismJS/prism/issues/3227)) [`21a3c2d7`](http://github.com/PrismJS/prism/commit/21a3c2d7)
* __Markdown__
    * Fixed typo in token name ([#3101](http://github.com/PrismJS/prism/issues/3101)) [`00f77a2c`](http://github.com/PrismJS/prism/commit/00f77a2c)
* __MAXScript__
    * Various improvements ([#3181](http://github.com/PrismJS/prism/issues/3181)) [`e9b856c8`](http://github.com/PrismJS/prism/commit/e9b856c8)
    * Fixed booleans not being highlighted ([#3134](http://github.com/PrismJS/prism/issues/3134)) [`c6574e6b`](http://github.com/PrismJS/prism/commit/c6574e6b)
* __Monkey__
    * Use standard tokens correctly ([#3228](http://github.com/PrismJS/prism/issues/3228)) [`c1025aa6`](http://github.com/PrismJS/prism/commit/c1025aa6)
* __N1QL__
    * Updated keywords + minor improvements ([#3229](http://github.com/PrismJS/prism/issues/3229)) [`642d93ec`](http://github.com/PrismJS/prism/commit/642d93ec)
* __nginx__
    * Made some patterns greedy ([#3230](http://github.com/PrismJS/prism/issues/3230)) [`7b72e0ad`](http://github.com/PrismJS/prism/commit/7b72e0ad)
* __Nim__
    * Added `char` token and made some tokens greedy ([#3231](http://github.com/PrismJS/prism/issues/3231)) [`2334b4b6`](http://github.com/PrismJS/prism/commit/2334b4b6)
    * Fixed backtick identifier ([#3118](http://github.com/PrismJS/prism/issues/3118)) [`75331bea`](http://github.com/PrismJS/prism/commit/75331bea)
* __Nix__
    * Use standard token name correctly ([#3232](http://github.com/PrismJS/prism/issues/3232)) [`5bf6e35f`](http://github.com/PrismJS/prism/commit/5bf6e35f)
    * Removed unmatchable token ([#3119](http://github.com/PrismJS/prism/issues/3119)) [`dc1e808f`](http://github.com/PrismJS/prism/commit/dc1e808f)
* __NSIS__
    * Made `comment` greedy ([#3234](http://github.com/PrismJS/prism/issues/3234)) [`969f152a`](http://github.com/PrismJS/prism/commit/969f152a)
    * Update regex pattern for variables ([#3266](http://github.com/PrismJS/prism/issues/3266)) [`adcc8784`](http://github.com/PrismJS/prism/commit/adcc8784)
    * Update regex for constants pattern ([#3267](http://github.com/PrismJS/prism/issues/3267)) [`55583fb2`](http://github.com/PrismJS/prism/commit/55583fb2)
* __Objective-C__
    * Improved `string` token ([#3235](http://github.com/PrismJS/prism/issues/3235)) [`8e0e95f3`](http://github.com/PrismJS/prism/commit/8e0e95f3)
* __OCaml__
    * Improved tokenization ([#3269](http://github.com/PrismJS/prism/issues/3269)) [`7bcc5da0`](http://github.com/PrismJS/prism/commit/7bcc5da0)
    * Removed unmatchable punctuation variant ([#3120](http://github.com/PrismJS/prism/issues/3120)) [`314d6994`](http://github.com/PrismJS/prism/commit/314d6994)
* __Oz__
    * Improved tokenization ([#3240](http://github.com/PrismJS/prism/issues/3240)) [`a3905c04`](http://github.com/PrismJS/prism/commit/a3905c04)
* __Pascal__
    * Added support for asm and directives ([#2653](http://github.com/PrismJS/prism/issues/2653)) [`f053af13`](http://github.com/PrismJS/prism/commit/f053af13)
* __PATROL Scripting Language__
    * Added `boolean` token ([#3248](http://github.com/PrismJS/prism/issues/3248)) [`a5b6c5eb`](http://github.com/PrismJS/prism/commit/a5b6c5eb)
* __Perl__
    * Improved tokenization ([#3241](http://github.com/PrismJS/prism/issues/3241)) [`f22ea9f9`](http://github.com/PrismJS/prism/commit/f22ea9f9)
* __PHP__
    * Removed useless keyword tokens ([#3121](http://github.com/PrismJS/prism/issues/3121)) [`ee62a080`](http://github.com/PrismJS/prism/commit/ee62a080)
* __PHP Extras__
    * Improved `scope` and `this` ([#3243](http://github.com/PrismJS/prism/issues/3243)) [`59ef51db`](http://github.com/PrismJS/prism/commit/59ef51db)
* __PL/SQL__
    * Updated keywords + other improvements ([#3109](http://github.com/PrismJS/prism/issues/3109)) [`e7ba877b`](http://github.com/PrismJS/prism/commit/e7ba877b)
* __PowerQuery__
    * Improved tokenization and use standard tokens correctly ([#3244](http://github.com/PrismJS/prism/issues/3244)) [`5688f487`](http://github.com/PrismJS/prism/commit/5688f487)
    * Removed useless `data-type` alternative ([#3122](http://github.com/PrismJS/prism/issues/3122)) [`eeb13996`](http://github.com/PrismJS/prism/commit/eeb13996)
* __PowerShell__
    * Fixed lookbehind + refactoring ([#3245](http://github.com/PrismJS/prism/issues/3245)) [`d30a2da6`](http://github.com/PrismJS/prism/commit/d30a2da6)
* __Processing__
    * Use standard tokens correctly ([#3246](http://github.com/PrismJS/prism/issues/3246)) [`5ee8c557`](http://github.com/PrismJS/prism/commit/5ee8c557)
* __Prolog__
    * Removed variable token + minor improvements ([#3247](http://github.com/PrismJS/prism/issues/3247)) [`bacf9ae3`](http://github.com/PrismJS/prism/commit/bacf9ae3)
* __Pug__
    * Improved filter tokenization ([#3258](http://github.com/PrismJS/prism/issues/3258)) [`0390e644`](http://github.com/PrismJS/prism/commit/0390e644)
* __PureBasic__
    * Fixed token order inside `asm` token ([#3123](http://github.com/PrismJS/prism/issues/3123)) [`f3b25786`](http://github.com/PrismJS/prism/commit/f3b25786)
* __Python__
    * Made `comment` greedy ([#3249](http://github.com/PrismJS/prism/issues/3249)) [`8ecef306`](http://github.com/PrismJS/prism/commit/8ecef306)
    * Add `match` and `case` (soft) keywords ([#3142](http://github.com/PrismJS/prism/issues/3142)) [`3f24dc72`](http://github.com/PrismJS/prism/commit/3f24dc72)
    * Recognize walrus operator ([#3126](http://github.com/PrismJS/prism/issues/3126)) [`18bd101c`](http://github.com/PrismJS/prism/commit/18bd101c)
    * Fixed numbers ending with a dot ([#3106](http://github.com/PrismJS/prism/issues/3106)) [`2c63efa6`](http://github.com/PrismJS/prism/commit/2c63efa6)
* __QML__
    * Made `string` greedy ([#3250](http://github.com/PrismJS/prism/issues/3250)) [`1e6dcb51`](http://github.com/PrismJS/prism/commit/1e6dcb51)
* __React JSX__
    * Move alias property ([#3222](http://github.com/PrismJS/prism/issues/3222)) [`18c92048`](http://github.com/PrismJS/prism/commit/18c92048)
* __React TSX__
    * Removed `parameter` token ([#3090](http://github.com/PrismJS/prism/issues/3090)) [`0a313f4f`](http://github.com/PrismJS/prism/commit/0a313f4f)
* __Reason__
    * Use standard tokens correctly ([#3251](http://github.com/PrismJS/prism/issues/3251)) [`809af0d9`](http://github.com/PrismJS/prism/commit/809af0d9)
* __Regex__
    * Fixed char-class/char-set confusion ([#3124](http://github.com/PrismJS/prism/issues/3124)) [`4dde2e20`](http://github.com/PrismJS/prism/commit/4dde2e20)
* __Ren'py__
    * Improved language + added tests ([#3125](http://github.com/PrismJS/prism/issues/3125)) [`ede55b2c`](http://github.com/PrismJS/prism/commit/ede55b2c)
* __Rip__
    * Use standard `char` token ([#3252](http://github.com/PrismJS/prism/issues/3252)) [`2069ab0c`](http://github.com/PrismJS/prism/commit/2069ab0c)
* __Ruby__
    * Improved tokenization ([#3193](http://github.com/PrismJS/prism/issues/3193)) [`86028adb`](http://github.com/PrismJS/prism/commit/86028adb)
* __Rust__
    * Improved `type-definition` and use standard tokens correctly ([#3253](http://github.com/PrismJS/prism/issues/3253)) [`4049e5c6`](http://github.com/PrismJS/prism/commit/4049e5c6)
* __Scheme__
    * Use standard `char` token ([#3254](http://github.com/PrismJS/prism/issues/3254)) [`7d740c45`](http://github.com/PrismJS/prism/commit/7d740c45)
    * Updates syntax for reals ([#3159](http://github.com/PrismJS/prism/issues/3159)) [`4eb81fa1`](http://github.com/PrismJS/prism/commit/4eb81fa1)
* __Smalltalk__
    * Use standard `char` token ([#3255](http://github.com/PrismJS/prism/issues/3255)) [`a7bb3001`](http://github.com/PrismJS/prism/commit/a7bb3001)
    * Added `boolean` token ([#3100](http://github.com/PrismJS/prism/issues/3100)) [`51382524`](http://github.com/PrismJS/prism/commit/51382524)
* __Smarty__
    * Improved tokenization ([#3268](http://github.com/PrismJS/prism/issues/3268)) [`acc0bc09`](http://github.com/PrismJS/prism/commit/acc0bc09)
* __SQL__
    * Added identifier token ([#3141](http://github.com/PrismJS/prism/issues/3141)) [`4e00cddd`](http://github.com/PrismJS/prism/commit/4e00cddd)
* __Squirrel__
    * Use standard `char` token ([#3256](http://github.com/PrismJS/prism/issues/3256)) [`58a65bfd`](http://github.com/PrismJS/prism/commit/58a65bfd)
* __Stan__
    * Added missing keywords and HOFs ([#3238](http://github.com/PrismJS/prism/issues/3238)) [`afd77ed1`](http://github.com/PrismJS/prism/commit/afd77ed1)
* __Structured Text (IEC 61131-3)__
    * Structured text: Improved tokenization ([#3213](http://github.com/PrismJS/prism/issues/3213)) [`d04d166d`](http://github.com/PrismJS/prism/commit/d04d166d)
* __Swift__
    * Added support for `isolated` keyword ([#3174](http://github.com/PrismJS/prism/issues/3174)) [`18c828a6`](http://github.com/PrismJS/prism/commit/18c828a6)
* __TAP__
    * Conform to quoted-properties style ([#3127](http://github.com/PrismJS/prism/issues/3127)) [`3ef71533`](http://github.com/PrismJS/prism/commit/3ef71533)
* __Tremor__
    * Use standard `regex` token ([#3257](http://github.com/PrismJS/prism/issues/3257)) [`c56e4bf5`](http://github.com/PrismJS/prism/commit/c56e4bf5)
* __Twig__
    * Improved tokenization ([#3259](http://github.com/PrismJS/prism/issues/3259)) [`e03a7c24`](http://github.com/PrismJS/prism/commit/e03a7c24)
* __TypeScript__
    * Removed duplicate keywords ([#3132](http://github.com/PrismJS/prism/issues/3132)) [`91060fd6`](http://github.com/PrismJS/prism/commit/91060fd6)
* __URI__
    * Fixed IPv4 regex ([#3128](http://github.com/PrismJS/prism/issues/3128)) [`599e30ee`](http://github.com/PrismJS/prism/commit/599e30ee)
* __V__
    * Use standard `char` token ([#3260](http://github.com/PrismJS/prism/issues/3260)) [`e4373256`](http://github.com/PrismJS/prism/commit/e4373256)
* __Verilog__
    * Use standard tokens correctly ([#3261](http://github.com/PrismJS/prism/issues/3261)) [`43124129`](http://github.com/PrismJS/prism/commit/43124129)
* __Visual Basic__
    * Simplify regexes and use more common aliases ([#3262](http://github.com/PrismJS/prism/issues/3262)) [`aa73d448`](http://github.com/PrismJS/prism/commit/aa73d448)
* __Wolfram language__
    * Removed unmatchable punctuation variant ([#3133](http://github.com/PrismJS/prism/issues/3133)) [`a28a86ad`](http://github.com/PrismJS/prism/commit/a28a86ad)
* __Xojo (REALbasic)__
    * Proper token name for directives ([#3263](http://github.com/PrismJS/prism/issues/3263)) [`ffd8343f`](http://github.com/PrismJS/prism/commit/ffd8343f)
* __Zig__
    * Added missing keywords ([#3279](http://github.com/PrismJS/prism/issues/3279)) [`deed35e3`](http://github.com/PrismJS/prism/commit/deed35e3)
    * Use standard `char` token ([#3264](http://github.com/PrismJS/prism/issues/3264)) [`c3f9fb70`](http://github.com/PrismJS/prism/commit/c3f9fb70)
    * Fixed module comments and astral chars ([#3129](http://github.com/PrismJS/prism/issues/3129)) [`09a0e2ba`](http://github.com/PrismJS/prism/commit/09a0e2ba)

### Updated plugins

* __File Highlight__
    * File highlight+data range ([#1813](http://github.com/PrismJS/prism/issues/1813)) [`d38592c5`](http://github.com/PrismJS/prism/commit/d38592c5)
* __Keep Markup__
    * Added `drop-tokens` option class ([#3166](http://github.com/PrismJS/prism/issues/3166)) [`b679cfe6`](http://github.com/PrismJS/prism/commit/b679cfe6)
* __Line Highlight__
    * Expose `highlightLines` function as `Prism.plugins.highlightLines` ([#3086](http://github.com/PrismJS/prism/issues/3086)) [`9f4c0e74`](http://github.com/PrismJS/prism/commit/9f4c0e74)
* __Toolbar__
    * Set `z-index` of `.toolbar` to 10 ([#3163](http://github.com/PrismJS/prism/issues/3163)) [`1cac3559`](http://github.com/PrismJS/prism/commit/1cac3559)

### Updated themes

* Coy: Set `z-index` to make shadows visible in colored table cells ([#3161](http://github.com/PrismJS/prism/issues/3161)) [`79f250f3`](http://github.com/PrismJS/prism/commit/79f250f3)
* Coy: Added padding to account for box shadow ([#3143](http://github.com/PrismJS/prism/issues/3143)) [`a6a4ce7e`](http://github.com/PrismJS/prism/commit/a6a4ce7e)

### Other

* __Core__
    * Added `setLanguage` util function ([#3167](http://github.com/PrismJS/prism/issues/3167)) [`b631949a`](http://github.com/PrismJS/prism/commit/b631949a)
    * Fixed type error on null ([#3057](http://github.com/PrismJS/prism/issues/3057)) [`a80a68ba`](http://github.com/PrismJS/prism/commit/a80a68ba)
    * Document `disableWorkerMessageHandler` ([#3088](http://github.com/PrismJS/prism/issues/3088)) [`213cf7be`](http://github.com/PrismJS/prism/commit/213cf7be)
* __Infrastructure__
    * Tests: Added `.html.test` files for replace `.js` language tests ([#3148](http://github.com/PrismJS/prism/issues/3148)) [`2e834c8c`](http://github.com/PrismJS/prism/commit/2e834c8c)
    * Added regex coverage ([#3138](http://github.com/PrismJS/prism/issues/3138)) [`5333e281`](http://github.com/PrismJS/prism/commit/5333e281)
    * Tests: Added `TestCaseFile` class and generalized `runTestCase` ([#3147](http://github.com/PrismJS/prism/issues/3147)) [`ae8888a0`](http://github.com/PrismJS/prism/commit/ae8888a0)
    * Added even more language tests ([#3137](http://github.com/PrismJS/prism/issues/3137)) [`344d0b27`](http://github.com/PrismJS/prism/commit/344d0b27)
    * Added more plugin tests ([#1969](http://github.com/PrismJS/prism/issues/1969)) [`a394a14d`](http://github.com/PrismJS/prism/commit/a394a14d)
    * Added more language tests ([#3131](http://github.com/PrismJS/prism/issues/3131)) [`2f7f7364`](http://github.com/PrismJS/prism/commit/2f7f7364)
    * `package.json`: Added `engines.node` field ([#3108](http://github.com/PrismJS/prism/issues/3108)) [`798ee4f6`](http://github.com/PrismJS/prism/commit/798ee4f6)
    * Use tabs in `package(-lock).json` ([#3098](http://github.com/PrismJS/prism/issues/3098)) [`8daebb4a`](http://github.com/PrismJS/prism/commit/8daebb4a)
    * Update `eslint-plugin-regexp@1.2.0` ([#3091](http://github.com/PrismJS/prism/issues/3091)) [`e6e1d5ae`](http://github.com/PrismJS/prism/commit/e6e1d5ae)
    * Added minified CSS ([#3073](http://github.com/PrismJS/prism/issues/3073)) [`d63d6c0e`](http://github.com/PrismJS/prism/commit/d63d6c0e)
* __Website__
    * Readme: Clarify usage of our build system ([#3239](http://github.com/PrismJS/prism/issues/3239)) [`6f1d904a`](http://github.com/PrismJS/prism/commit/6f1d904a)
    * Improved CDN usage URLs ([#3285](http://github.com/PrismJS/prism/issues/3285)) [`6c21b2f7`](http://github.com/PrismJS/prism/commit/6c21b2f7)
    * Update download.html [`9d5424b6`](http://github.com/PrismJS/prism/commit/9d5424b6)
    * Autoloader: Mention how to load grammars from URLs ([#3218](http://github.com/PrismJS/prism/issues/3218)) [`cefccdd1`](http://github.com/PrismJS/prism/commit/cefccdd1)
    * Added PrismJS React and HTML tutorial link ([#3190](http://github.com/PrismJS/prism/issues/3190)) [`0ecdbdce`](http://github.com/PrismJS/prism/commit/0ecdbdce)
    * Improved readability ([#3177](http://github.com/PrismJS/prism/issues/3177)) [`4433d7fe`](http://github.com/PrismJS/prism/commit/4433d7fe)
    * Fixed red highlighting in Firefox ([#3178](http://github.com/PrismJS/prism/issues/3178)) [`746da79b`](http://github.com/PrismJS/prism/commit/746da79b)
    * Use Keep markup to highlight code section ([#3164](http://github.com/PrismJS/prism/issues/3164)) [`ebd59e32`](http://github.com/PrismJS/prism/commit/ebd59e32)
    * Document standard tokens and provide examples ([#3104](http://github.com/PrismJS/prism/issues/3104)) [`37551200`](http://github.com/PrismJS/prism/commit/37551200)
    * Fixed dead link to third-party tutorial [#3155](http://github.com/PrismJS/prism/issues/3155) ([#3156](http://github.com/PrismJS/prism/issues/3156)) [`31b4c1b8`](http://github.com/PrismJS/prism/commit/31b4c1b8)
    * Repositioned theme selector ([#3146](http://github.com/PrismJS/prism/issues/3146)) [`ea361e5a`](http://github.com/PrismJS/prism/commit/ea361e5a)
    * Adjusted TOC's line height for better readability ([#3145](http://github.com/PrismJS/prism/issues/3145)) [`c5629706`](http://github.com/PrismJS/prism/commit/c5629706)
    * Updated plugin header template ([#3144](http://github.com/PrismJS/prism/issues/3144)) [`faedfe85`](http://github.com/PrismJS/prism/commit/faedfe85)
    * Update test and example pages to use Autoloader ([#1936](http://github.com/PrismJS/prism/issues/1936)) [`3d96eedc`](http://github.com/PrismJS/prism/commit/3d96eedc)

## 1.25.0 (2021-09-16)

### New components

* __AviSynth__ ([#3071](http://github.com/PrismJS/prism/issues/3071)) [`746a4b1a`](http://github.com/PrismJS/prism/commit/746a4b1a)
* __Avro IDL__ ([#3051](http://github.com/PrismJS/prism/issues/3051)) [`87e5a376`](http://github.com/PrismJS/prism/commit/87e5a376)
* __Bicep__ ([#3027](http://github.com/PrismJS/prism/issues/3027)) [`c1dce998`](http://github.com/PrismJS/prism/commit/c1dce998)
* __GAP (CAS)__ ([#3054](http://github.com/PrismJS/prism/issues/3054)) [`23cd9b65`](http://github.com/PrismJS/prism/commit/23cd9b65)
* __GN__ ([#3062](http://github.com/PrismJS/prism/issues/3062)) [`4f97b82b`](http://github.com/PrismJS/prism/commit/4f97b82b)
* __Hoon__ ([#2978](http://github.com/PrismJS/prism/issues/2978)) [`ea776756`](http://github.com/PrismJS/prism/commit/ea776756)
* __Kusto__ ([#3068](http://github.com/PrismJS/prism/issues/3068)) [`e008ea05`](http://github.com/PrismJS/prism/commit/e008ea05)
* __Magma (CAS)__ ([#3055](http://github.com/PrismJS/prism/issues/3055)) [`a1b67ce3`](http://github.com/PrismJS/prism/commit/a1b67ce3)
* __MAXScript__ ([#3060](http://github.com/PrismJS/prism/issues/3060)) [`4fbdd2f8`](http://github.com/PrismJS/prism/commit/4fbdd2f8)
* __Mermaid__ ([#3050](http://github.com/PrismJS/prism/issues/3050)) [`148c1eca`](http://github.com/PrismJS/prism/commit/148c1eca)
* __Razor C#__ ([#3064](http://github.com/PrismJS/prism/issues/3064)) [`4433ccfc`](http://github.com/PrismJS/prism/commit/4433ccfc)
* __Systemd configuration file__ ([#3053](http://github.com/PrismJS/prism/issues/3053)) [`8df825e0`](http://github.com/PrismJS/prism/commit/8df825e0)
* __Wren__ ([#3063](http://github.com/PrismJS/prism/issues/3063)) [`6a356d25`](http://github.com/PrismJS/prism/commit/6a356d25)

### Updated components

* __Bicep__
    * Added support for multiline and interpolated strings and other improvements ([#3028](http://github.com/PrismJS/prism/issues/3028)) [`748bb9ac`](http://github.com/PrismJS/prism/commit/748bb9ac)
* __C#__
    * Added `with` keyword & improved record support ([#2993](http://github.com/PrismJS/prism/issues/2993)) [`fdd291c0`](http://github.com/PrismJS/prism/commit/fdd291c0)
    * Added `record`, `init`, and `nullable` keyword ([#2991](http://github.com/PrismJS/prism/issues/2991)) [`9b561565`](http://github.com/PrismJS/prism/commit/9b561565)
    * Added context check for `from` keyword ([#2970](http://github.com/PrismJS/prism/issues/2970)) [`158f25d4`](http://github.com/PrismJS/prism/commit/158f25d4)
* __C++__
    * Fixed generic function false positive ([#3043](http://github.com/PrismJS/prism/issues/3043)) [`5de8947f`](http://github.com/PrismJS/prism/commit/5de8947f)
* __Clojure__
    * Improved tokenization ([#3056](http://github.com/PrismJS/prism/issues/3056)) [`8d0b74b5`](http://github.com/PrismJS/prism/commit/8d0b74b5)
* __Hoon__
    * Fixed mixed-case aura tokenization ([#3002](http://github.com/PrismJS/prism/issues/3002)) [`9c8911bd`](http://github.com/PrismJS/prism/commit/9c8911bd)
* __Liquid__
    * Added all objects from Shopify reference ([#2998](http://github.com/PrismJS/prism/issues/2998)) [`693b7433`](http://github.com/PrismJS/prism/commit/693b7433)
    * Added `empty` keyword ([#2997](http://github.com/PrismJS/prism/issues/2997)) [`fe3bc526`](http://github.com/PrismJS/prism/commit/fe3bc526)
* __Log file__
    * Added support for Java stack traces ([#3003](http://github.com/PrismJS/prism/issues/3003)) [`b0365e70`](http://github.com/PrismJS/prism/commit/b0365e70)
* __Markup__
    * Made most patterns greedy ([#3065](http://github.com/PrismJS/prism/issues/3065)) [`52e8cee9`](http://github.com/PrismJS/prism/commit/52e8cee9)
    * Fixed ReDoS ([#3078](http://github.com/PrismJS/prism/issues/3078)) [`0ff371bb`](http://github.com/PrismJS/prism/commit/0ff371bb)
* __PureScript__
    * Made `∀` a keyword (alias for `forall`) ([#3005](http://github.com/PrismJS/prism/issues/3005)) [`b38fc89a`](http://github.com/PrismJS/prism/commit/b38fc89a)
    * Improved Haskell and PureScript ([#3020](http://github.com/PrismJS/prism/issues/3020)) [`679539ec`](http://github.com/PrismJS/prism/commit/679539ec)
* __Python__
    * Support for underscores in numbers ([#3039](http://github.com/PrismJS/prism/issues/3039)) [`6f5d68f7`](http://github.com/PrismJS/prism/commit/6f5d68f7)
* __Sass__
    * Fixed issues with CSS Extras ([#2994](http://github.com/PrismJS/prism/issues/2994)) [`14fdfe32`](http://github.com/PrismJS/prism/commit/14fdfe32)
* __Shell session__
    * Fixed command false positives ([#3048](http://github.com/PrismJS/prism/issues/3048)) [`35b88fcf`](http://github.com/PrismJS/prism/commit/35b88fcf)
    * Added support for the percent sign as shell symbol ([#3010](http://github.com/PrismJS/prism/issues/3010)) [`4492b62b`](http://github.com/PrismJS/prism/commit/4492b62b)
* __Swift__
    * Major improvements ([#3022](http://github.com/PrismJS/prism/issues/3022)) [`8541db2e`](http://github.com/PrismJS/prism/commit/8541db2e)
    * Added support for `@propertyWrapper`, `@MainActor`, and `@globalActor` ([#3009](http://github.com/PrismJS/prism/issues/3009)) [`ce5e0f01`](http://github.com/PrismJS/prism/commit/ce5e0f01)
    * Added support for new Swift 5.5 keywords ([#2988](http://github.com/PrismJS/prism/issues/2988)) [`bb93fac0`](http://github.com/PrismJS/prism/commit/bb93fac0)
* __TypeScript__
    * Fixed keyword false positives ([#3001](http://github.com/PrismJS/prism/issues/3001)) [`212e0ef2`](http://github.com/PrismJS/prism/commit/212e0ef2)

### Updated plugins

* __JSONP Highlight__
    * Refactored JSONP logic ([#3018](http://github.com/PrismJS/prism/issues/3018)) [`5126d1e1`](http://github.com/PrismJS/prism/commit/5126d1e1)
* __Line Highlight__
    * Extend highlight to full line width inside scroll container ([#3011](http://github.com/PrismJS/prism/issues/3011)) [`e289ec60`](http://github.com/PrismJS/prism/commit/e289ec60)
* __Normalize Whitespace__
    * Removed unnecessary checks ([#3017](http://github.com/PrismJS/prism/issues/3017)) [`63edf14c`](http://github.com/PrismJS/prism/commit/63edf14c)
* __Previewers__
    * Ensure popup is visible across themes ([#3080](http://github.com/PrismJS/prism/issues/3080)) [`c7b6a7f6`](http://github.com/PrismJS/prism/commit/c7b6a7f6)

### Updated themes

* __Twilight__
    * Increase selector specificities of plugin overrides ([#3081](http://github.com/PrismJS/prism/issues/3081)) [`ffb20439`](http://github.com/PrismJS/prism/commit/ffb20439)

### Other

* __Infrastructure__
    * Added benchmark suite ([#2153](http://github.com/PrismJS/prism/issues/2153)) [`44456b21`](http://github.com/PrismJS/prism/commit/44456b21)
    * Tests: Insert expected JSON by Default ([#2960](http://github.com/PrismJS/prism/issues/2960)) [`e997dd35`](http://github.com/PrismJS/prism/commit/e997dd35)
    * Tests: Improved dection of empty patterns ([#3058](http://github.com/PrismJS/prism/issues/3058)) [`d216e602`](http://github.com/PrismJS/prism/commit/d216e602)
* __Website__
    * Highlight Keywords: More documentation ([#3049](http://github.com/PrismJS/prism/issues/3049)) [`247fd9a3`](http://github.com/PrismJS/prism/commit/247fd9a3)


## 1.24.1 (2021-07-03)

### Updated components

* __Markdown__
    * Fixed Markdown not working in NodeJS ([#2977](http://github.com/PrismJS/prism/issues/2977)) [`151121cd`](http://github.com/PrismJS/prism/commit/151121cd)

### Updated plugins

* __Toolbar__
    * Fixed styles being applies to nested elements ([#2980](http://github.com/PrismJS/prism/issues/2980)) [`748ecddc`](http://github.com/PrismJS/prism/commit/748ecddc)


## 1.24.0 (2021-06-27)

### New components

* __CFScript__ ([#2771](http://github.com/PrismJS/prism/issues/2771)) [`b0a6ec85`](http://github.com/PrismJS/prism/commit/b0a6ec85)
* __ChaiScript__ ([#2706](http://github.com/PrismJS/prism/issues/2706)) [`3f7d7453`](http://github.com/PrismJS/prism/commit/3f7d7453)
* __COBOL__ ([#2800](http://github.com/PrismJS/prism/issues/2800)) [`7e5f78ff`](http://github.com/PrismJS/prism/commit/7e5f78ff)
* __Coq__ ([#2803](http://github.com/PrismJS/prism/issues/2803)) [`41e25d3c`](http://github.com/PrismJS/prism/commit/41e25d3c)
* __CSV__ ([#2794](http://github.com/PrismJS/prism/issues/2794)) [`f9b69528`](http://github.com/PrismJS/prism/commit/f9b69528)
* __DOT (Graphviz)__ ([#2690](http://github.com/PrismJS/prism/issues/2690)) [`1f91868e`](http://github.com/PrismJS/prism/commit/1f91868e)
* __False__ ([#2802](http://github.com/PrismJS/prism/issues/2802)) [`99a21dc5`](http://github.com/PrismJS/prism/commit/99a21dc5)
* __ICU Message Format__ ([#2745](http://github.com/PrismJS/prism/issues/2745)) [`bf4e7ba9`](http://github.com/PrismJS/prism/commit/bf4e7ba9)
* __Idris__ ([#2755](http://github.com/PrismJS/prism/issues/2755)) [`e9314415`](http://github.com/PrismJS/prism/commit/e9314415)
* __Jexl__ ([#2764](http://github.com/PrismJS/prism/issues/2764)) [`7e51b99c`](http://github.com/PrismJS/prism/commit/7e51b99c)
* __KuMir (КуМир)__ ([#2760](http://github.com/PrismJS/prism/issues/2760)) [`3419fb77`](http://github.com/PrismJS/prism/commit/3419fb77)
* __Log file__ ([#2796](http://github.com/PrismJS/prism/issues/2796)) [`2bc6475b`](http://github.com/PrismJS/prism/commit/2bc6475b)
* __Nevod__ ([#2798](http://github.com/PrismJS/prism/issues/2798)) [`f84c49c5`](http://github.com/PrismJS/prism/commit/f84c49c5)
* __OpenQasm__ ([#2797](http://github.com/PrismJS/prism/issues/2797)) [`1a2347a3`](http://github.com/PrismJS/prism/commit/1a2347a3)
* __PATROL Scripting Language__ ([#2739](http://github.com/PrismJS/prism/issues/2739)) [`18c67b49`](http://github.com/PrismJS/prism/commit/18c67b49)
* __Q#__ ([#2804](http://github.com/PrismJS/prism/issues/2804)) [`1b63cd01`](http://github.com/PrismJS/prism/commit/1b63cd01)
* __Rego__ ([#2624](http://github.com/PrismJS/prism/issues/2624)) [`e38986f9`](http://github.com/PrismJS/prism/commit/e38986f9)
* __Squirrel__ ([#2721](http://github.com/PrismJS/prism/issues/2721)) [`fd1081d2`](http://github.com/PrismJS/prism/commit/fd1081d2)
* __URI__ ([#2708](http://github.com/PrismJS/prism/issues/2708)) [`bbc77d19`](http://github.com/PrismJS/prism/commit/bbc77d19)
* __V__ ([#2687](http://github.com/PrismJS/prism/issues/2687)) [`72962701`](http://github.com/PrismJS/prism/commit/72962701)
* __Wolfram language__ & __Mathematica__ & __Mathematica Notebook__ ([#2921](http://github.com/PrismJS/prism/issues/2921)) [`c4f6b2cc`](http://github.com/PrismJS/prism/commit/c4f6b2cc)

### Updated components

* Fixed problems reported by `regexp/no-dupe-disjunctions` ([#2952](http://github.com/PrismJS/prism/issues/2952)) [`f471d2d7`](http://github.com/PrismJS/prism/commit/f471d2d7)
* Fixed some cases of quadratic worst-case runtime ([#2922](http://github.com/PrismJS/prism/issues/2922)) [`79d22182`](http://github.com/PrismJS/prism/commit/79d22182)
* Fixed 2 cases of exponential backtracking ([#2774](http://github.com/PrismJS/prism/issues/2774)) [`d85e30da`](http://github.com/PrismJS/prism/commit/d85e30da)
* __AQL__
    * Update for ArangoDB 3.8 ([#2842](http://github.com/PrismJS/prism/issues/2842)) [`ea82478d`](http://github.com/PrismJS/prism/commit/ea82478d)
* __AutoHotkey__
    * Improved tag pattern ([#2920](http://github.com/PrismJS/prism/issues/2920)) [`fc2a3334`](http://github.com/PrismJS/prism/commit/fc2a3334)
* __Bash__
    * Accept hyphens in function names ([#2832](http://github.com/PrismJS/prism/issues/2832)) [`e4ad22ad`](http://github.com/PrismJS/prism/commit/e4ad22ad)
    * Fixed single-quoted strings ([#2792](http://github.com/PrismJS/prism/issues/2792)) [`e5cfdb4a`](http://github.com/PrismJS/prism/commit/e5cfdb4a)
* __C++__
    * Added support for generic functions and made `::` punctuation ([#2814](http://github.com/PrismJS/prism/issues/2814)) [`3df62fd0`](http://github.com/PrismJS/prism/commit/3df62fd0)
    * Added missing keywords and modules ([#2763](http://github.com/PrismJS/prism/issues/2763)) [`88fa72cf`](http://github.com/PrismJS/prism/commit/88fa72cf)
* __Dart__
    * Improved support for classes & generics ([#2810](http://github.com/PrismJS/prism/issues/2810)) [`d0bcd074`](http://github.com/PrismJS/prism/commit/d0bcd074)
* __Docker__
    * Improvements ([#2720](http://github.com/PrismJS/prism/issues/2720)) [`93dd83c2`](http://github.com/PrismJS/prism/commit/93dd83c2)
* __Elixir__
    * Added missing keywords ([#2958](http://github.com/PrismJS/prism/issues/2958)) [`114e4626`](http://github.com/PrismJS/prism/commit/114e4626)
    * Added missing keyword and other improvements ([#2773](http://github.com/PrismJS/prism/issues/2773)) [`e6c0d298`](http://github.com/PrismJS/prism/commit/e6c0d298)
    * Added `defdelagate` keyword and highlighting for function/module names ([#2709](http://github.com/PrismJS/prism/issues/2709)) [`59f725d7`](http://github.com/PrismJS/prism/commit/59f725d7)
* __F#__
    * Fixed comment false positive ([#2703](http://github.com/PrismJS/prism/issues/2703)) [`a5d7178c`](http://github.com/PrismJS/prism/commit/a5d7178c)
* __GraphQL__
    * Fixed `definition-query` and `definition-mutation` tokens ([#2964](http://github.com/PrismJS/prism/issues/2964)) [`bfd7fded`](http://github.com/PrismJS/prism/commit/bfd7fded)
    * Added more detailed tokens ([#2939](http://github.com/PrismJS/prism/issues/2939)) [`34f24ac9`](http://github.com/PrismJS/prism/commit/34f24ac9)
* __Handlebars__
    * Added `hbs` alias ([#2874](http://github.com/PrismJS/prism/issues/2874)) [`43976351`](http://github.com/PrismJS/prism/commit/43976351)
* __HTTP__
    * Fixed body not being highlighted ([#2734](http://github.com/PrismJS/prism/issues/2734)) [`1dfc8271`](http://github.com/PrismJS/prism/commit/1dfc8271)
    * More granular tokenization ([#2722](http://github.com/PrismJS/prism/issues/2722)) [`6183fd9b`](http://github.com/PrismJS/prism/commit/6183fd9b)
    * Allow root path in request line ([#2711](http://github.com/PrismJS/prism/issues/2711)) [`4e7b2a82`](http://github.com/PrismJS/prism/commit/4e7b2a82)
* __Ini__
    * Consistently mimic Win32 INI parsing ([#2779](http://github.com/PrismJS/prism/issues/2779)) [`42d24fa2`](http://github.com/PrismJS/prism/commit/42d24fa2)
* __Java__
    * Improved generics ([#2812](http://github.com/PrismJS/prism/issues/2812)) [`4ec7535c`](http://github.com/PrismJS/prism/commit/4ec7535c)
* __JavaScript__
    * Added support for import assertions ([#2953](http://github.com/PrismJS/prism/issues/2953)) [`ab7c9953`](http://github.com/PrismJS/prism/commit/ab7c9953)
    * Added support for RegExp Match Indices ([#2900](http://github.com/PrismJS/prism/issues/2900)) [`415651a0`](http://github.com/PrismJS/prism/commit/415651a0)
    * Added hashbang and private getters/setters ([#2815](http://github.com/PrismJS/prism/issues/2815)) [`9c610ae6`](http://github.com/PrismJS/prism/commit/9c610ae6)
    * Improved contextual keywords ([#2713](http://github.com/PrismJS/prism/issues/2713)) [`022f90a0`](http://github.com/PrismJS/prism/commit/022f90a0)
* __JS Templates__
    * Added SQL templates ([#2945](http://github.com/PrismJS/prism/issues/2945)) [`abab9104`](http://github.com/PrismJS/prism/commit/abab9104)
* __JSON__
    * Fixed backtracking issue in Safari ([#2691](http://github.com/PrismJS/prism/issues/2691)) [`cf28d1b2`](http://github.com/PrismJS/prism/commit/cf28d1b2)
* __Liquid__
    * Added Markup support, missing tokens, and other improvements ([#2950](http://github.com/PrismJS/prism/issues/2950)) [`ac1d12f9`](http://github.com/PrismJS/prism/commit/ac1d12f9)
* __Log file__
    * Minor improvements ([#2851](http://github.com/PrismJS/prism/issues/2851)) [`45ec4a88`](http://github.com/PrismJS/prism/commit/45ec4a88)
* __Markdown__
    * Improved code snippets ([#2967](http://github.com/PrismJS/prism/issues/2967)) [`e9477d83`](http://github.com/PrismJS/prism/commit/e9477d83)
    * Workaround for incorrect highlighting due to double `wrap` hook ([#2719](http://github.com/PrismJS/prism/issues/2719)) [`2b355c98`](http://github.com/PrismJS/prism/commit/2b355c98)
* __Markup__
    * Added support for DOM event attributes ([#2702](http://github.com/PrismJS/prism/issues/2702)) [`8dbbbb35`](http://github.com/PrismJS/prism/commit/8dbbbb35)
* __nginx__
    * Complete rewrite ([#2793](http://github.com/PrismJS/prism/issues/2793)) [`5943f4cb`](http://github.com/PrismJS/prism/commit/5943f4cb)
* __PHP__
    * Fixed functions with namespaces ([#2889](http://github.com/PrismJS/prism/issues/2889)) [`87d79390`](http://github.com/PrismJS/prism/commit/87d79390)
    * Fixed string interpolation ([#2864](http://github.com/PrismJS/prism/issues/2864)) [`cf3755cb`](http://github.com/PrismJS/prism/commit/cf3755cb)
    * Added missing PHP 7.4 `fn` keyword ([#2858](http://github.com/PrismJS/prism/issues/2858)) [`e0ee93f1`](http://github.com/PrismJS/prism/commit/e0ee93f1)
    * Fixed methods with keyword names + minor improvements ([#2818](http://github.com/PrismJS/prism/issues/2818)) [`7e8cd40d`](http://github.com/PrismJS/prism/commit/7e8cd40d)
    * Improved constant support for PHP 8.1 enums ([#2770](http://github.com/PrismJS/prism/issues/2770)) [`8019e2f6`](http://github.com/PrismJS/prism/commit/8019e2f6)
    * Added support for PHP 8.1 enums ([#2752](http://github.com/PrismJS/prism/issues/2752)) [`f79b0eef`](http://github.com/PrismJS/prism/commit/f79b0eef)
    * Class names at the start of a string are now highlighted correctly ([#2731](http://github.com/PrismJS/prism/issues/2731)) [`04ef309c`](http://github.com/PrismJS/prism/commit/04ef309c)
    * Numeral syntax improvements ([#2701](http://github.com/PrismJS/prism/issues/2701)) [`01af04ed`](http://github.com/PrismJS/prism/commit/01af04ed)
* __React JSX__
    * Added support for general spread expressions ([#2754](http://github.com/PrismJS/prism/issues/2754)) [`9f59f52d`](http://github.com/PrismJS/prism/commit/9f59f52d)
    * Added support for comments inside tags ([#2728](http://github.com/PrismJS/prism/issues/2728)) [`30b0444f`](http://github.com/PrismJS/prism/commit/30b0444f)
* __reST (reStructuredText)__
    * Fixed `inline` pattern ([#2946](http://github.com/PrismJS/prism/issues/2946)) [`a7656de6`](http://github.com/PrismJS/prism/commit/a7656de6)
* __Ruby__
    * Added heredoc literals ([#2885](http://github.com/PrismJS/prism/issues/2885)) [`20b77bff`](http://github.com/PrismJS/prism/commit/20b77bff)
    * Added missing regex flags ([#2845](http://github.com/PrismJS/prism/issues/2845)) [`3786f396`](http://github.com/PrismJS/prism/commit/3786f396)
    * Added missing regex interpolation ([#2841](http://github.com/PrismJS/prism/issues/2841)) [`f08c2f7f`](http://github.com/PrismJS/prism/commit/f08c2f7f)
* __Scheme__
    * Added support for high Unicode characters ([#2693](http://github.com/PrismJS/prism/issues/2693)) [`0e61a7e1`](http://github.com/PrismJS/prism/commit/0e61a7e1)
    * Added bracket support ([#2813](http://github.com/PrismJS/prism/issues/2813)) [`1c6c0bf3`](http://github.com/PrismJS/prism/commit/1c6c0bf3)
* __Shell session__
    * Fixed multi-line commands ([#2872](http://github.com/PrismJS/prism/issues/2872)) [`cda976b1`](http://github.com/PrismJS/prism/commit/cda976b1)
    * Commands prefixed with a path are now detected ([#2686](http://github.com/PrismJS/prism/issues/2686)) [`c83fd0b8`](http://github.com/PrismJS/prism/commit/c83fd0b8)
* __SQL__
    * Added `ILIKE` operator ([#2704](http://github.com/PrismJS/prism/issues/2704)) [`6e34771f`](http://github.com/PrismJS/prism/commit/6e34771f)
* __Swift__
    * Added `some` keyword ([#2756](http://github.com/PrismJS/prism/issues/2756)) [`cf354ef5`](http://github.com/PrismJS/prism/commit/cf354ef5)
* __TypeScript__
    * Updated keywords ([#2861](http://github.com/PrismJS/prism/issues/2861)) [`fe98d536`](http://github.com/PrismJS/prism/commit/fe98d536)
    * Added support for decorators ([#2820](http://github.com/PrismJS/prism/issues/2820)) [`31cc2142`](http://github.com/PrismJS/prism/commit/31cc2142)
* __VB.Net__
    * Improved strings, comments, and punctuation ([#2782](http://github.com/PrismJS/prism/issues/2782)) [`a68f1fb6`](http://github.com/PrismJS/prism/commit/a68f1fb6)
* __Xojo (REALbasic)__
    * `REM` is no longer highlighted as a keyword in comments ([#2823](http://github.com/PrismJS/prism/issues/2823)) [`ebbbfd47`](http://github.com/PrismJS/prism/commit/ebbbfd47)
    * Added last missing Keyword "Selector" ([#2807](http://github.com/PrismJS/prism/issues/2807)) [`e32e043b`](http://github.com/PrismJS/prism/commit/e32e043b)
    * Added missing keywords ([#2805](http://github.com/PrismJS/prism/issues/2805)) [`459365ec`](http://github.com/PrismJS/prism/commit/459365ec)

### Updated plugins

* Made Match Braces and Custom Class compatible ([#2947](http://github.com/PrismJS/prism/issues/2947)) [`4b55bd6a`](http://github.com/PrismJS/prism/commit/4b55bd6a)
* Consistent Prism check ([#2788](http://github.com/PrismJS/prism/issues/2788)) [`96335642`](http://github.com/PrismJS/prism/commit/96335642)
* __Command Line__
    * Don't modify empty code blocks ([#2896](http://github.com/PrismJS/prism/issues/2896)) [`c81c3319`](http://github.com/PrismJS/prism/commit/c81c3319)
* __Copy to Clipboard__
    * Removed ClipboardJS dependency ([#2784](http://github.com/PrismJS/prism/issues/2784)) [`d5e14e1a`](http://github.com/PrismJS/prism/commit/d5e14e1a)
    * Fixed `clipboard.writeText` not working inside iFrames ([#2826](http://github.com/PrismJS/prism/issues/2826)) [`01b7b6f7`](http://github.com/PrismJS/prism/commit/01b7b6f7)
    * Added support for custom styles ([#2789](http://github.com/PrismJS/prism/issues/2789)) [`4d7f75b0`](http://github.com/PrismJS/prism/commit/4d7f75b0)
    * Make copy-to-clipboard configurable with multiple attributes ([#2723](http://github.com/PrismJS/prism/issues/2723)) [`2cb909e1`](http://github.com/PrismJS/prism/commit/2cb909e1)
* __File Highlight__
    * Fixed Prism check ([#2827](http://github.com/PrismJS/prism/issues/2827)) [`53d34b22`](http://github.com/PrismJS/prism/commit/53d34b22)
* __Line Highlight__
    * Fixed linkable line numbers not being initialized ([#2732](http://github.com/PrismJS/prism/issues/2732)) [`ccc73ab7`](http://github.com/PrismJS/prism/commit/ccc73ab7)
* __Previewers__
    * Use `classList` instead of `className` ([#2787](http://github.com/PrismJS/prism/issues/2787)) [`d298d46e`](http://github.com/PrismJS/prism/commit/d298d46e)

### Other

* __Core__
    * Add `tabindex` to code blocks to enable keyboard navigation ([#2799](http://github.com/PrismJS/prism/issues/2799)) [`dbf70515`](http://github.com/PrismJS/prism/commit/dbf70515)
    * Fixed greedy rematching reach bug ([#2705](http://github.com/PrismJS/prism/issues/2705)) [`b37987d3`](http://github.com/PrismJS/prism/commit/b37987d3)
    * Added support for plaintext ([#2738](http://github.com/PrismJS/prism/issues/2738)) [`970674cf`](http://github.com/PrismJS/prism/commit/970674cf)
* __Infrastructure__
    * Added ESLint
    * Added `npm-run-all` to clean up test command ([#2938](http://github.com/PrismJS/prism/issues/2938)) [`5d3d8088`](http://github.com/PrismJS/prism/commit/5d3d8088)
    * Added link to Q&A to issue templates ([#2834](http://github.com/PrismJS/prism/issues/2834)) [`7cd9e794`](http://github.com/PrismJS/prism/commit/7cd9e794)
    * CI: Run tests with NodeJS 16.x ([#2888](http://github.com/PrismJS/prism/issues/2888)) [`b77317c5`](http://github.com/PrismJS/prism/commit/b77317c5)
    * Dangerfile: Trim merge base ([#2761](http://github.com/PrismJS/prism/issues/2761)) [`45b0e82a`](http://github.com/PrismJS/prism/commit/45b0e82a)
    * Dangerfile: Fixed how changed files are determined ([#2757](http://github.com/PrismJS/prism/issues/2757)) [`0feb266f`](http://github.com/PrismJS/prism/commit/0feb266f)
    * Deps: Updated regex tooling ([#2923](http://github.com/PrismJS/prism/issues/2923)) [`ad9878ad`](http://github.com/PrismJS/prism/commit/ad9878ad)
    * Tests: Added `--language` for patterns tests ([#2929](http://github.com/PrismJS/prism/issues/2929)) [`a62ef796`](http://github.com/PrismJS/prism/commit/a62ef796)
    * Tests: Fixed polynomial backtracking test ([#2891](http://github.com/PrismJS/prism/issues/2891)) [`8dbf1217`](http://github.com/PrismJS/prism/commit/8dbf1217)
    * Tests: Fixed languages test discovery [`a9a199b6`](http://github.com/PrismJS/prism/commit/a9a199b6)
    * Tests: Test discovery should ignore unsupported file extensions ([#2886](http://github.com/PrismJS/prism/issues/2886)) [`4492c5ce`](http://github.com/PrismJS/prism/commit/4492c5ce)
    * Tests: Exhaustive pattern tests ([#2688](http://github.com/PrismJS/prism/issues/2688)) [`53151404`](http://github.com/PrismJS/prism/commit/53151404)
    * Tests: Fixed pretty print incorrectly calculating print width ([#2821](http://github.com/PrismJS/prism/issues/2821)) [`5bc405e7`](http://github.com/PrismJS/prism/commit/5bc405e7)
    * Tests: Automatically normalize line ends ([#2934](http://github.com/PrismJS/prism/issues/2934)) [`99f3ddcd`](http://github.com/PrismJS/prism/commit/99f3ddcd)
    * Tests: Added `--insert` and `--update` parameters to language test ([#2809](http://github.com/PrismJS/prism/issues/2809)) [`4c8b855d`](http://github.com/PrismJS/prism/commit/4c8b855d)
    * Tests: Stricter `components.json` tests ([#2758](http://github.com/PrismJS/prism/issues/2758)) [`933af805`](http://github.com/PrismJS/prism/commit/933af805)
* __Website__
    * Copy to clipboard: Fixed highlighting ([#2725](http://github.com/PrismJS/prism/issues/2725)) [`7a790bf9`](http://github.com/PrismJS/prism/commit/7a790bf9)
    * Readme: Mention `npm ci` ([#2899](http://github.com/PrismJS/prism/issues/2899)) [`91f3aaed`](http://github.com/PrismJS/prism/commit/91f3aaed)
    * Readme: Added Node and npm version requirements ([#2790](http://github.com/PrismJS/prism/issues/2790)) [`cb220168`](http://github.com/PrismJS/prism/commit/cb220168)
    * Readme: Update link to Chinese translation ([#2749](http://github.com/PrismJS/prism/issues/2749)) [`266cc700`](http://github.com/PrismJS/prism/commit/266cc700)
    * Replace `my.cdn` in code sample with Handlebars-like placeholder ([#2906](http://github.com/PrismJS/prism/issues/2906)) [`80471181`](http://github.com/PrismJS/prism/commit/80471181)
    * Set dummy domain for CDN ([#2905](http://github.com/PrismJS/prism/issues/2905)) [`38f1d289`](http://github.com/PrismJS/prism/commit/38f1d289)
    * Added MySQL to "Used by" section ([#2785](http://github.com/PrismJS/prism/issues/2785)) [`9b784ebf`](http://github.com/PrismJS/prism/commit/9b784ebf)
    * Improved basic usage section ([#2777](http://github.com/PrismJS/prism/issues/2777)) [`a1209930`](http://github.com/PrismJS/prism/commit/a1209930)
    * Updated URL in Autolinker example ([#2751](http://github.com/PrismJS/prism/issues/2751)) [`ec9767d6`](http://github.com/PrismJS/prism/commit/ec9767d6)
    * Added React native tutorial ([#2683](http://github.com/PrismJS/prism/issues/2683)) [`1506f345`](http://github.com/PrismJS/prism/commit/1506f345)


## 1.23.0 (2020-12-31)

### New components

* __Apex__ ([#2622](http://github.com/PrismJS/prism/issues/2622)) [`f0e2b70e`](http://github.com/PrismJS/prism/commit/f0e2b70e)
* __DataWeave__ ([#2659](http://github.com/PrismJS/prism/issues/2659)) [`0803525b`](http://github.com/PrismJS/prism/commit/0803525b)
* __PromQL__ ([#2628](http://github.com/PrismJS/prism/issues/2628)) [`8831c706`](http://github.com/PrismJS/prism/commit/8831c706)

### Updated components

* Fixed multiple vulnerable regexes ([#2584](http://github.com/PrismJS/prism/issues/2584)) [`c2f6a644`](http://github.com/PrismJS/prism/commit/c2f6a644)
* __Apache Configuration__
    * Update directive-flag to match `=` ([#2612](http://github.com/PrismJS/prism/issues/2612)) [`00bf00e3`](http://github.com/PrismJS/prism/commit/00bf00e3)
* __C-like__
    * Made all comments greedy ([#2680](http://github.com/PrismJS/prism/issues/2680)) [`0a3932fe`](http://github.com/PrismJS/prism/commit/0a3932fe)
* __C__
    * Better class name and macro name detection ([#2585](http://github.com/PrismJS/prism/issues/2585)) [`129faf5c`](http://github.com/PrismJS/prism/commit/129faf5c)
* __Content-Security-Policy__
    * Added missing directives and keywords ([#2664](http://github.com/PrismJS/prism/issues/2664)) [`f1541342`](http://github.com/PrismJS/prism/commit/f1541342)
    * Do not highlight directive names with adjacent hyphens ([#2662](http://github.com/PrismJS/prism/issues/2662)) [`a7ccc16d`](http://github.com/PrismJS/prism/commit/a7ccc16d)
* __CSS__
    * Better HTML `style` attribute tokenization ([#2569](http://github.com/PrismJS/prism/issues/2569)) [`b04cbafe`](http://github.com/PrismJS/prism/commit/b04cbafe)
* __Java__
    * Improved package and class name detection ([#2599](http://github.com/PrismJS/prism/issues/2599)) [`0889bc7c`](http://github.com/PrismJS/prism/commit/0889bc7c)
    * Added Java 15 keywords ([#2567](http://github.com/PrismJS/prism/issues/2567)) [`73f81c89`](http://github.com/PrismJS/prism/commit/73f81c89)
* __Java stack trace__
    * Added support stack frame element class loaders and modules ([#2658](http://github.com/PrismJS/prism/issues/2658)) [`0bb4f096`](http://github.com/PrismJS/prism/commit/0bb4f096)
* __Julia__
    * Removed constants that are not exported by default ([#2601](http://github.com/PrismJS/prism/issues/2601)) [`093c8175`](http://github.com/PrismJS/prism/commit/093c8175)
* __Kotlin__
    * Added support for backticks in function names ([#2489](http://github.com/PrismJS/prism/issues/2489)) [`a5107d5c`](http://github.com/PrismJS/prism/commit/a5107d5c)
* __Latte__
    * Fixed exponential backtracking ([#2682](http://github.com/PrismJS/prism/issues/2682)) [`89f1e182`](http://github.com/PrismJS/prism/commit/89f1e182)
* __Markdown__
    * Improved URL tokenization ([#2678](http://github.com/PrismJS/prism/issues/2678)) [`2af3e2c2`](http://github.com/PrismJS/prism/commit/2af3e2c2)
    * Added support for YAML front matter ([#2634](http://github.com/PrismJS/prism/issues/2634)) [`5cf9cfbc`](http://github.com/PrismJS/prism/commit/5cf9cfbc)
* __PHP__
    * Added support for PHP 7.4 + other major improvements ([#2566](http://github.com/PrismJS/prism/issues/2566)) [`38808e64`](http://github.com/PrismJS/prism/commit/38808e64)
    * Added support for PHP 8.0 features ([#2591](http://github.com/PrismJS/prism/issues/2591)) [`df922d90`](http://github.com/PrismJS/prism/commit/df922d90)
    * Removed C-like dependency ([#2619](http://github.com/PrismJS/prism/issues/2619)) [`89ebb0b7`](http://github.com/PrismJS/prism/commit/89ebb0b7)
    * Fixed exponential backtracking ([#2684](http://github.com/PrismJS/prism/issues/2684)) [`37b9c9a1`](http://github.com/PrismJS/prism/commit/37b9c9a1)
* __Sass (Scss)__
    * Added support for Sass modules ([#2643](http://github.com/PrismJS/prism/issues/2643)) [`deb238a6`](http://github.com/PrismJS/prism/commit/deb238a6)
* __Scheme__
    * Fixed number pattern ([#2648](http://github.com/PrismJS/prism/issues/2648)) [`e01ecd00`](http://github.com/PrismJS/prism/commit/e01ecd00)
    * Fixed function and function-like false positives ([#2611](http://github.com/PrismJS/prism/issues/2611)) [`7951ca24`](http://github.com/PrismJS/prism/commit/7951ca24)
* __Shell session__
    * Fixed false positives because of links in command output ([#2649](http://github.com/PrismJS/prism/issues/2649)) [`8e76a978`](http://github.com/PrismJS/prism/commit/8e76a978)
* __TSX__
    * Temporary fix for the collisions of JSX tags and TS generics ([#2596](http://github.com/PrismJS/prism/issues/2596)) [`25bdb494`](http://github.com/PrismJS/prism/commit/25bdb494)

### Updated plugins

* Made Autoloader and Diff Highlight compatible ([#2580](http://github.com/PrismJS/prism/issues/2580)) [`7a74497a`](http://github.com/PrismJS/prism/commit/7a74497a)
* __Copy to Clipboard Button__
    * Set `type="button"` attribute for copy to clipboard plugin ([#2593](http://github.com/PrismJS/prism/issues/2593)) [`f59a85f1`](http://github.com/PrismJS/prism/commit/f59a85f1)
* __File Highlight__
    * Fixed IE compatibility problem ([#2656](http://github.com/PrismJS/prism/issues/2656)) [`3f4ae00d`](http://github.com/PrismJS/prism/commit/3f4ae00d)
* __Line Highlight__
    * Fixed top offset in combination with Line numbers ([#2237](http://github.com/PrismJS/prism/issues/2237)) [`b40f8f4b`](http://github.com/PrismJS/prism/commit/b40f8f4b)
    * Fixed print background color ([#2668](http://github.com/PrismJS/prism/issues/2668)) [`cdb24abe`](http://github.com/PrismJS/prism/commit/cdb24abe)
* __Line Numbers__
    * Fixed null reference ([#2605](http://github.com/PrismJS/prism/issues/2605)) [`7cdfe556`](http://github.com/PrismJS/prism/commit/7cdfe556)
* __Treeview__
    * Fixed icons on dark themes ([#2631](http://github.com/PrismJS/prism/issues/2631)) [`7266e32f`](http://github.com/PrismJS/prism/commit/7266e32f)
* __Unescaped Markup__
    * Refactoring ([#2445](http://github.com/PrismJS/prism/issues/2445)) [`fc602822`](http://github.com/PrismJS/prism/commit/fc602822)

### Other

* Readme: Added alternative link for Chinese translation [`071232b4`](http://github.com/PrismJS/prism/commit/071232b4)
* Readme: Removed broken icon for Chinese translation ([#2670](http://github.com/PrismJS/prism/issues/2670)) [`2ea202b9`](http://github.com/PrismJS/prism/commit/2ea202b9)
* Readme: Grammar adjustments ([#2629](http://github.com/PrismJS/prism/issues/2629)) [`f217ab75`](http://github.com/PrismJS/prism/commit/f217ab75)
* __Core__
    * Moved pattern matching + lookbehind logic into function ([#2633](http://github.com/PrismJS/prism/issues/2633)) [`24574406`](http://github.com/PrismJS/prism/commit/24574406)
    * Fixed bug with greedy matching ([#2632](http://github.com/PrismJS/prism/issues/2632)) [`8fa8dd24`](http://github.com/PrismJS/prism/commit/8fa8dd24)
* __Infrastructure__
    * Migrate from TravisCI -> GitHub Actions ([#2606](http://github.com/PrismJS/prism/issues/2606)) [`69132045`](http://github.com/PrismJS/prism/commit/69132045)
    * Added Dangerfile and provide bundle size info ([#2608](http://github.com/PrismJS/prism/issues/2608)) [`9df20c5e`](http://github.com/PrismJS/prism/commit/9df20c5e)
    * New `start` script to start local server ([#2491](http://github.com/PrismJS/prism/issues/2491)) [`0604793c`](http://github.com/PrismJS/prism/commit/0604793c)
    * Added test for exponential backtracking ([#2590](http://github.com/PrismJS/prism/issues/2590)) [`05afbb10`](http://github.com/PrismJS/prism/commit/05afbb10)
    * Added test for polynomial backtracking ([#2597](http://github.com/PrismJS/prism/issues/2597)) [`e644178b`](http://github.com/PrismJS/prism/commit/e644178b)
    * Tests: Better pretty print ([#2600](http://github.com/PrismJS/prism/issues/2600)) [`8bfcc819`](http://github.com/PrismJS/prism/commit/8bfcc819)
    * Tests: Fixed sorted language list test ([#2623](http://github.com/PrismJS/prism/issues/2623)) [`2d3a1267`](http://github.com/PrismJS/prism/commit/2d3a1267)
    * Tests: Stricter pattern for nice-token-names test ([#2588](http://github.com/PrismJS/prism/issues/2588)) [`0df60be1`](http://github.com/PrismJS/prism/commit/0df60be1)
    * Tests: Added strict checks for `Prism.languages.extend` ([#2572](http://github.com/PrismJS/prism/issues/2572)) [`8828500e`](http://github.com/PrismJS/prism/commit/8828500e)
* __Website__
    * Test page: Added "Share" option ([#2575](http://github.com/PrismJS/prism/issues/2575)) [`b5f4f10e`](http://github.com/PrismJS/prism/commit/b5f4f10e)
    * Test page: Don't trigger ad-blockers with class ([#2677](http://github.com/PrismJS/prism/issues/2677)) [`df0738e9`](http://github.com/PrismJS/prism/commit/df0738e9)
    * Thousands -> millions [`9f82de50`](http://github.com/PrismJS/prism/commit/9f82de50)
    * Unescaped Markup: More doc regarding comments ([#2652](http://github.com/PrismJS/prism/issues/2652)) [`add3736a`](http://github.com/PrismJS/prism/commit/add3736a)
    * Website: Added and updated documentation ([#2654](http://github.com/PrismJS/prism/issues/2654)) [`8e660495`](http://github.com/PrismJS/prism/commit/8e660495)
    * Website: Updated and improved guide on "Extending Prism" page ([#2586](http://github.com/PrismJS/prism/issues/2586)) [`8e1f38ff`](http://github.com/PrismJS/prism/commit/8e1f38ff)

## 1.22.0 (2020-10-10)

### New components

* __Birb__ ([#2542](http://github.com/PrismJS/prism/issues/2542)) [`4d31e22a`](http://github.com/PrismJS/prism/commit/4d31e22a)
* __BSL (1C:Enterprise)__ & __OneScript__ ([#2520](http://github.com/PrismJS/prism/issues/2520)) [`5c33f0bb`](http://github.com/PrismJS/prism/commit/5c33f0bb)
* __MongoDB__ ([#2518](http://github.com/PrismJS/prism/issues/2518)) [`004eaa74`](http://github.com/PrismJS/prism/commit/004eaa74)
* __Naninovel Script__ ([#2494](http://github.com/PrismJS/prism/issues/2494)) [`388ad996`](http://github.com/PrismJS/prism/commit/388ad996)
* __PureScript__ ([#2526](http://github.com/PrismJS/prism/issues/2526)) [`ad748a00`](http://github.com/PrismJS/prism/commit/ad748a00)
* __SML__ & __SML/NJ__ ([#2537](http://github.com/PrismJS/prism/issues/2537)) [`cb75d9e2`](http://github.com/PrismJS/prism/commit/cb75d9e2)
* __Stan__ ([#2490](http://github.com/PrismJS/prism/issues/2490)) [`2da2beba`](http://github.com/PrismJS/prism/commit/2da2beba)
* __TypoScript__ & __TSConfig__ ([#2505](http://github.com/PrismJS/prism/issues/2505)) [`bf115f47`](http://github.com/PrismJS/prism/commit/bf115f47)

### Updated components

* Removed duplicate alternatives in various languages ([#2524](http://github.com/PrismJS/prism/issues/2524)) [`fa2225ff`](http://github.com/PrismJS/prism/commit/fa2225ff)
* __Haskell__
    * Improvements ([#2535](http://github.com/PrismJS/prism/issues/2535)) [`e023044c`](http://github.com/PrismJS/prism/commit/e023044c)
* __JS Extras__
    * Highlight import and export bindings ([#2533](http://github.com/PrismJS/prism/issues/2533)) [`c51ababb`](http://github.com/PrismJS/prism/commit/c51ababb)
    * Added control-flow keywords ([#2529](http://github.com/PrismJS/prism/issues/2529)) [`bcef22af`](http://github.com/PrismJS/prism/commit/bcef22af)
* __PHP__
    * Added `match` keyword (PHP 8.0) ([#2574](http://github.com/PrismJS/prism/issues/2574)) [`1761513e`](http://github.com/PrismJS/prism/commit/1761513e)
* __Processing__
    * Fixed function pattern ([#2564](http://github.com/PrismJS/prism/issues/2564)) [`35cbc02f`](http://github.com/PrismJS/prism/commit/35cbc02f)
* __Regex__
    * Changed how languages embed regexes ([#2532](http://github.com/PrismJS/prism/issues/2532)) [`f62ca787`](http://github.com/PrismJS/prism/commit/f62ca787)
* __Rust__
    * Fixed Unicode char literals ([#2550](http://github.com/PrismJS/prism/issues/2550)) [`3b4f14ca`](http://github.com/PrismJS/prism/commit/3b4f14ca)
* __Scheme__
    * Added support for R7RS syntax ([#2525](http://github.com/PrismJS/prism/issues/2525)) [`e4f6ccac`](http://github.com/PrismJS/prism/commit/e4f6ccac)
* __Shell session__
    * Added aliases ([#2548](http://github.com/PrismJS/prism/issues/2548)) [`bfb36748`](http://github.com/PrismJS/prism/commit/bfb36748)
    * Highlight all commands after the start of any Heredoc string ([#2509](http://github.com/PrismJS/prism/issues/2509)) [`6c921801`](http://github.com/PrismJS/prism/commit/6c921801)
* __YAML__
    * Improved key pattern ([#2561](http://github.com/PrismJS/prism/issues/2561)) [`59853a52`](http://github.com/PrismJS/prism/commit/59853a52)

### Updated plugins

* __Autoloader__
    * Fixed file detection regexes ([#2549](http://github.com/PrismJS/prism/issues/2549)) [`d36ea993`](http://github.com/PrismJS/prism/commit/d36ea993)
* __Match braces__
    * Fixed JS interpolation punctuation ([#2541](http://github.com/PrismJS/prism/issues/2541)) [`6b47133d`](http://github.com/PrismJS/prism/commit/6b47133d)
* __Show Language__
    * Added title for plain text ([#2555](http://github.com/PrismJS/prism/issues/2555)) [`a409245e`](http://github.com/PrismJS/prism/commit/a409245e)

### Other

* Tests: Added an option to accept the actual token stream ([#2515](http://github.com/PrismJS/prism/issues/2515)) [`bafab634`](http://github.com/PrismJS/prism/commit/bafab634)
* __Core__
    * Docs: Minor improvement ([#2513](http://github.com/PrismJS/prism/issues/2513)) [`206dc80f`](http://github.com/PrismJS/prism/commit/206dc80f)
* __Infrastructure__
    * JSDoc: Fixed line ends ([#2523](http://github.com/PrismJS/prism/issues/2523)) [`bf169e5f`](http://github.com/PrismJS/prism/commit/bf169e5f)
* __Website__
    * Website: Added new SB101 tutorial replacing the Crambler one ([#2576](http://github.com/PrismJS/prism/issues/2576)) [`655f985c`](http://github.com/PrismJS/prism/commit/655f985c)
    * Website: Fix typo on homepage by adding missing word add ([#2570](http://github.com/PrismJS/prism/issues/2570)) [`8ae6a4ba`](http://github.com/PrismJS/prism/commit/8ae6a4ba)
    * Custom class: Improved doc ([#2512](http://github.com/PrismJS/prism/issues/2512)) [`5ad6cb23`](http://github.com/PrismJS/prism/commit/5ad6cb23)

## 1.21.0 (2020-08-06)

### New components

* __.ignore__ & __.gitignore__ & __.hgignore__ & __.npmignore__ ([#2481](http://github.com/PrismJS/prism/issues/2481)) [`3fcce6fe`](http://github.com/PrismJS/prism/commit/3fcce6fe)
* __Agda__ ([#2430](http://github.com/PrismJS/prism/issues/2430)) [`3a127c7d`](http://github.com/PrismJS/prism/commit/3a127c7d)
* __AL__ ([#2300](http://github.com/PrismJS/prism/issues/2300)) [`de21eb64`](http://github.com/PrismJS/prism/commit/de21eb64)
* __Cypher__ ([#2459](http://github.com/PrismJS/prism/issues/2459)) [`398e2943`](http://github.com/PrismJS/prism/commit/398e2943)
* __Dhall__ ([#2473](http://github.com/PrismJS/prism/issues/2473)) [`649e51e5`](http://github.com/PrismJS/prism/commit/649e51e5)
* __EditorConfig__ ([#2471](http://github.com/PrismJS/prism/issues/2471)) [`ed8fff91`](http://github.com/PrismJS/prism/commit/ed8fff91)
* __HLSL__ ([#2318](http://github.com/PrismJS/prism/issues/2318)) [`87a5c7ae`](http://github.com/PrismJS/prism/commit/87a5c7ae)
* __JS stack trace__ ([#2418](http://github.com/PrismJS/prism/issues/2418)) [`ae0327b3`](http://github.com/PrismJS/prism/commit/ae0327b3)
* __PeopleCode__ ([#2302](http://github.com/PrismJS/prism/issues/2302)) [`bd4d8165`](http://github.com/PrismJS/prism/commit/bd4d8165)
* __PureBasic__ ([#2369](http://github.com/PrismJS/prism/issues/2369)) [`d0c1c70d`](http://github.com/PrismJS/prism/commit/d0c1c70d)
* __Racket__ ([#2315](http://github.com/PrismJS/prism/issues/2315)) [`053016ef`](http://github.com/PrismJS/prism/commit/053016ef)
* __Smali__ ([#2419](http://github.com/PrismJS/prism/issues/2419)) [`22eb5cad`](http://github.com/PrismJS/prism/commit/22eb5cad)
* __Structured Text (IEC 61131-3)__ ([#2311](http://github.com/PrismJS/prism/issues/2311)) [`8704cdfb`](http://github.com/PrismJS/prism/commit/8704cdfb)
* __UnrealScript__ ([#2305](http://github.com/PrismJS/prism/issues/2305)) [`1093ceb3`](http://github.com/PrismJS/prism/commit/1093ceb3)
* __WarpScript__ ([#2307](http://github.com/PrismJS/prism/issues/2307)) [`cde5b0fa`](http://github.com/PrismJS/prism/commit/cde5b0fa)
* __XML doc (.net)__ ([#2340](http://github.com/PrismJS/prism/issues/2340)) [`caec5e30`](http://github.com/PrismJS/prism/commit/caec5e30)
* __YANG__ ([#2467](http://github.com/PrismJS/prism/issues/2467)) [`ed1df1e1`](http://github.com/PrismJS/prism/commit/ed1df1e1)

### Updated components

* Markup & JSON: Added new aliases ([#2390](http://github.com/PrismJS/prism/issues/2390)) [`9782cfe6`](http://github.com/PrismJS/prism/commit/9782cfe6)
* Fixed several cases of exponential backtracking ([#2268](http://github.com/PrismJS/prism/issues/2268)) [`7a554b5f`](http://github.com/PrismJS/prism/commit/7a554b5f)
* __APL__
    * Added `⍥` ([#2409](http://github.com/PrismJS/prism/issues/2409)) [`0255cb6a`](http://github.com/PrismJS/prism/commit/0255cb6a)
* __AutoHotkey__
    * Added missing `format` built-in ([#2450](http://github.com/PrismJS/prism/issues/2450)) [`7c66cfc4`](http://github.com/PrismJS/prism/commit/7c66cfc4)
    * Improved comments and other improvements ([#2412](http://github.com/PrismJS/prism/issues/2412)) [`ddf3cc62`](http://github.com/PrismJS/prism/commit/ddf3cc62)
    * Added missing definitions ([#2400](http://github.com/PrismJS/prism/issues/2400)) [`4fe03676`](http://github.com/PrismJS/prism/commit/4fe03676)
* __Bash__
    * Added `composer` command ([#2298](http://github.com/PrismJS/prism/issues/2298)) [`044dd271`](http://github.com/PrismJS/prism/commit/044dd271)
* __Batch__
    * Fix escaped double quote ([#2485](http://github.com/PrismJS/prism/issues/2485)) [`f0f8210c`](http://github.com/PrismJS/prism/commit/f0f8210c)
* __C__
    * Improved macros and expressions ([#2440](http://github.com/PrismJS/prism/issues/2440)) [`8a72fa6f`](http://github.com/PrismJS/prism/commit/8a72fa6f)
    * Improved macros ([#2320](http://github.com/PrismJS/prism/issues/2320)) [`fdcf7ed2`](http://github.com/PrismJS/prism/commit/fdcf7ed2)
* __C#__
    * Improved pattern matching ([#2411](http://github.com/PrismJS/prism/issues/2411)) [`7f341fc1`](http://github.com/PrismJS/prism/commit/7f341fc1)
    * Fixed adjacent string interpolations ([#2402](http://github.com/PrismJS/prism/issues/2402)) [`2a2e79ed`](http://github.com/PrismJS/prism/commit/2a2e79ed)
* __C++__
    * Added support for default comparison operator ([#2426](http://github.com/PrismJS/prism/issues/2426)) [`8e9d161c`](http://github.com/PrismJS/prism/commit/8e9d161c)
    * Improved class name detection ([#2348](http://github.com/PrismJS/prism/issues/2348)) [`e3fe9040`](http://github.com/PrismJS/prism/commit/e3fe9040)
    * Fixed `enum class` class names ([#2342](http://github.com/PrismJS/prism/issues/2342)) [`30b4e254`](http://github.com/PrismJS/prism/commit/30b4e254)
* __Content-Security-Policy__
    * Fixed directives ([#2461](http://github.com/PrismJS/prism/issues/2461)) [`537a9e80`](http://github.com/PrismJS/prism/commit/537a9e80)
* __CSS__
    * Improved url and added keywords ([#2432](http://github.com/PrismJS/prism/issues/2432)) [`964de5a1`](http://github.com/PrismJS/prism/commit/964de5a1)
* __CSS Extras__
    * Optimized `class` and `id` patterns ([#2359](http://github.com/PrismJS/prism/issues/2359)) [`fdbc4473`](http://github.com/PrismJS/prism/commit/fdbc4473)
    * Renamed `attr-{name,value}` tokens and added tokens for combinators and selector lists ([#2373](http://github.com/PrismJS/prism/issues/2373)) [`e523f5d0`](http://github.com/PrismJS/prism/commit/e523f5d0)
* __Dart__
    * Added missing keywords ([#2355](http://github.com/PrismJS/prism/issues/2355)) [`4172ab6f`](http://github.com/PrismJS/prism/commit/4172ab6f)
* __Diff__
    * Added `prefix` token ([#2281](http://github.com/PrismJS/prism/issues/2281)) [`fd432a5b`](http://github.com/PrismJS/prism/commit/fd432a5b)
* __Docker__
    * Fixed strings inside comments ([#2428](http://github.com/PrismJS/prism/issues/2428)) [`37273a6f`](http://github.com/PrismJS/prism/commit/37273a6f)
* __EditorConfig__
    * Trim spaces before key and section title ([#2482](http://github.com/PrismJS/prism/issues/2482)) [`0c30c582`](http://github.com/PrismJS/prism/commit/0c30c582)
* __EJS__
    * Added `eta` alias ([#2282](http://github.com/PrismJS/prism/issues/2282)) [`0cfb6c5f`](http://github.com/PrismJS/prism/commit/0cfb6c5f)
* __GLSL__
    * Improvements ([#2321](http://github.com/PrismJS/prism/issues/2321)) [`33e49956`](http://github.com/PrismJS/prism/commit/33e49956)
* __GraphQL__
    * Added missing keywords ([#2407](http://github.com/PrismJS/prism/issues/2407)) [`de8ed16d`](http://github.com/PrismJS/prism/commit/de8ed16d)
    * Added support for multi-line strings and descriptions ([#2406](http://github.com/PrismJS/prism/issues/2406)) [`9e64c62e`](http://github.com/PrismJS/prism/commit/9e64c62e)
* __Io__
    * Fixed operator pattern ([#2365](http://github.com/PrismJS/prism/issues/2365)) [`d6055771`](http://github.com/PrismJS/prism/commit/d6055771)
* __Java__
    * Fixed `namespace` token ([#2295](http://github.com/PrismJS/prism/issues/2295)) [`62e184bb`](http://github.com/PrismJS/prism/commit/62e184bb)
* __JavaDoc__
    * Improvements ([#2324](http://github.com/PrismJS/prism/issues/2324)) [`032910ba`](http://github.com/PrismJS/prism/commit/032910ba)
* __JavaScript__
    * Improved regex detection ([#2465](http://github.com/PrismJS/prism/issues/2465)) [`4f55052f`](http://github.com/PrismJS/prism/commit/4f55052f)
    * Improved `get`/`set` and parameter detection ([#2387](http://github.com/PrismJS/prism/issues/2387)) [`ed715158`](http://github.com/PrismJS/prism/commit/ed715158)
    * Added support for logical assignment operators ([#2378](http://github.com/PrismJS/prism/issues/2378)) [`b28f21b7`](http://github.com/PrismJS/prism/commit/b28f21b7)
* __JSDoc__
    * Improvements ([#2466](http://github.com/PrismJS/prism/issues/2466)) [`2805ae35`](http://github.com/PrismJS/prism/commit/2805ae35)
* __JSON__
    * Greedy comments ([#2479](http://github.com/PrismJS/prism/issues/2479)) [`158caf52`](http://github.com/PrismJS/prism/commit/158caf52)
* __Julia__
    * Improved strings, comments, and other patterns ([#2363](http://github.com/PrismJS/prism/issues/2363)) [`81cf2344`](http://github.com/PrismJS/prism/commit/81cf2344)
* __Kotlin__
    * Added `kt` and `kts` aliases ([#2474](http://github.com/PrismJS/prism/issues/2474)) [`67f97e2e`](http://github.com/PrismJS/prism/commit/67f97e2e)
* __Markup__
    * Added tokens inside DOCTYPE ([#2349](http://github.com/PrismJS/prism/issues/2349)) [`9c7bc820`](http://github.com/PrismJS/prism/commit/9c7bc820)
    * Added `attr-equals` alias for the attribute `=` sign ([#2350](http://github.com/PrismJS/prism/issues/2350)) [`96a0116e`](http://github.com/PrismJS/prism/commit/96a0116e)
    * Added alias for named entities ([#2351](http://github.com/PrismJS/prism/issues/2351)) [`ab1e34ae`](http://github.com/PrismJS/prism/commit/ab1e34ae)
    * Added support for SSML ([#2306](http://github.com/PrismJS/prism/issues/2306)) [`eb70070d`](http://github.com/PrismJS/prism/commit/eb70070d)
* __Objective-C__
    * Added `objc` alias ([#2331](http://github.com/PrismJS/prism/issues/2331)) [`67c6b7af`](http://github.com/PrismJS/prism/commit/67c6b7af)
* __PowerShell__
    * New functions pattern bases on naming conventions ([#2301](http://github.com/PrismJS/prism/issues/2301)) [`fec39bcf`](http://github.com/PrismJS/prism/commit/fec39bcf)
* __Protocol Buffers__
    * Added support for RPC syntax ([#2414](http://github.com/PrismJS/prism/issues/2414)) [`939a17c4`](http://github.com/PrismJS/prism/commit/939a17c4)
* __Pug__
    * Improved class and id detection in tags ([#2358](http://github.com/PrismJS/prism/issues/2358)) [`7f948ecb`](http://github.com/PrismJS/prism/commit/7f948ecb)
* __Python__
    * Fixed empty multiline strings ([#2344](http://github.com/PrismJS/prism/issues/2344)) [`c9324476`](http://github.com/PrismJS/prism/commit/c9324476)
* __Regex__
    * Added aliases and minor improvements ([#2325](http://github.com/PrismJS/prism/issues/2325)) [`8a72830a`](http://github.com/PrismJS/prism/commit/8a72830a)
* __Ren'py__
    * Added `rpy` alias ([#2385](http://github.com/PrismJS/prism/issues/2385)) [`4935b5ca`](http://github.com/PrismJS/prism/commit/4935b5ca)
* __Ruby__
    * Optimized `regex` and `string` patterns ([#2354](http://github.com/PrismJS/prism/issues/2354)) [`b526e8c0`](http://github.com/PrismJS/prism/commit/b526e8c0)
* __Rust__
    * Improvements ([#2464](http://github.com/PrismJS/prism/issues/2464)) [`2ff40fe0`](http://github.com/PrismJS/prism/commit/2ff40fe0)
    * Improvements ([#2332](http://github.com/PrismJS/prism/issues/2332)) [`194c5429`](http://github.com/PrismJS/prism/commit/194c5429)
* __SAS__
    * Improved macro string functions ([#2463](http://github.com/PrismJS/prism/issues/2463)) [`278316ca`](http://github.com/PrismJS/prism/commit/278316ca)
    * Handle edge case of string macro functions ([#2451](http://github.com/PrismJS/prism/issues/2451)) [`a0a9f1ef`](http://github.com/PrismJS/prism/commit/a0a9f1ef)
    * Improved comments in `proc groovy` and `proc lua` ([#2392](http://github.com/PrismJS/prism/issues/2392)) [`475a5903`](http://github.com/PrismJS/prism/commit/475a5903)
* __Scheme__
    * Adjusted lookbehind for literals ([#2396](http://github.com/PrismJS/prism/issues/2396)) [`1e3f542b`](http://github.com/PrismJS/prism/commit/1e3f542b)
    * Improved lambda parameter ([#2346](http://github.com/PrismJS/prism/issues/2346)) [`1946918a`](http://github.com/PrismJS/prism/commit/1946918a)
    * Consistent lookaheads ([#2322](http://github.com/PrismJS/prism/issues/2322)) [`d2541d54`](http://github.com/PrismJS/prism/commit/d2541d54)
    * Improved boolean ([#2316](http://github.com/PrismJS/prism/issues/2316)) [`e27e65af`](http://github.com/PrismJS/prism/commit/e27e65af)
    * Added missing special keywords ([#2304](http://github.com/PrismJS/prism/issues/2304)) [`ac297ba5`](http://github.com/PrismJS/prism/commit/ac297ba5)
    * Improvements ([#2263](http://github.com/PrismJS/prism/issues/2263)) [`9a49f78f`](http://github.com/PrismJS/prism/commit/9a49f78f)
* __Solidity (Ethereum)__
    * Added `sol` alias ([#2382](http://github.com/PrismJS/prism/issues/2382)) [`6352213a`](http://github.com/PrismJS/prism/commit/6352213a)
* __SQL__
    * Added PostgreSQL `RETURNING` keyword ([#2476](http://github.com/PrismJS/prism/issues/2476)) [`bea7a585`](http://github.com/PrismJS/prism/commit/bea7a585)
* __Stylus__
    * Fixed comments breaking declarations + minor improvements ([#2372](http://github.com/PrismJS/prism/issues/2372)) [`6d663b6e`](http://github.com/PrismJS/prism/commit/6d663b6e)
    * New tokens and other improvements ([#2368](http://github.com/PrismJS/prism/issues/2368)) [`2c10ef8a`](http://github.com/PrismJS/prism/commit/2c10ef8a)
    * Fixed comments breaking strings and URLs ([#2361](http://github.com/PrismJS/prism/issues/2361)) [`0d65d6c9`](http://github.com/PrismJS/prism/commit/0d65d6c9)
* __T4 Text Templates (VB)__
    * Use the correct VB variant ([#2341](http://github.com/PrismJS/prism/issues/2341)) [`b6093339`](http://github.com/PrismJS/prism/commit/b6093339)
* __TypeScript__
    * Added `asserts` keyword and other improvements ([#2280](http://github.com/PrismJS/prism/issues/2280)) [`a197cfcd`](http://github.com/PrismJS/prism/commit/a197cfcd)
* __Visual Basic__
    * Added VBA alias ([#2469](http://github.com/PrismJS/prism/issues/2469)) [`78161d60`](http://github.com/PrismJS/prism/commit/78161d60)
    * Added `until` keyword ([#2423](http://github.com/PrismJS/prism/issues/2423)) [`a13ee8d9`](http://github.com/PrismJS/prism/commit/a13ee8d9)
    * Added missing keywords ([#2376](http://github.com/PrismJS/prism/issues/2376)) [`ba5ac1da`](http://github.com/PrismJS/prism/commit/ba5ac1da)

### Updated plugins

* File Highlight & JSONP Highlight update ([#1974](http://github.com/PrismJS/prism/issues/1974)) [`afea17d9`](http://github.com/PrismJS/prism/commit/afea17d9)
* Added general de/activation mechanism for plugins ([#2434](http://github.com/PrismJS/prism/issues/2434)) [`a36e96ab`](http://github.com/PrismJS/prism/commit/a36e96ab)
* __Autoloader__
    * Fixed bug breaking Autoloader ([#2449](http://github.com/PrismJS/prism/issues/2449)) [`a3416bf3`](http://github.com/PrismJS/prism/commit/a3416bf3)
    * Fixed `data-dependencies` and extensions ([#2326](http://github.com/PrismJS/prism/issues/2326)) [`1654b25f`](http://github.com/PrismJS/prism/commit/1654b25f)
    * Improved path detection and other minor improvements ([#2245](http://github.com/PrismJS/prism/issues/2245)) [`5cdc3251`](http://github.com/PrismJS/prism/commit/5cdc3251)
* __Command Line__
    * Some refactoring ([#2290](http://github.com/PrismJS/prism/issues/2290)) [`8c9c2896`](http://github.com/PrismJS/prism/commit/8c9c2896)
    * Correctly rehighlight elements ([#2291](http://github.com/PrismJS/prism/issues/2291)) [`e6b2c6fc`](http://github.com/PrismJS/prism/commit/e6b2c6fc)
* __Line Highlight__
    * Added linkable line numbers ([#2328](http://github.com/PrismJS/prism/issues/2328)) [`eb82e804`](http://github.com/PrismJS/prism/commit/eb82e804)
* __Line Numbers__
    * Improved resize performance ([#2125](http://github.com/PrismJS/prism/issues/2125)) [`b96ed225`](http://github.com/PrismJS/prism/commit/b96ed225)
    * Fixed TypeError when `lineNumberWrapper` is null ([#2337](http://github.com/PrismJS/prism/issues/2337)) [`4b61661d`](http://github.com/PrismJS/prism/commit/4b61661d)
    * Exposed `_resizeElement` function ([#2288](http://github.com/PrismJS/prism/issues/2288)) [`893f2a79`](http://github.com/PrismJS/prism/commit/893f2a79)
* __Previewers__
    * Fixed XSS ([#2506](http://github.com/PrismJS/prism/issues/2506)) [`8bba4880`](http://github.com/PrismJS/prism/commit/8bba4880)
* __Unescaped Markup__
    * No longer requires `Prism.languages.markup` ([#2444](http://github.com/PrismJS/prism/issues/2444)) [`af132dd3`](http://github.com/PrismJS/prism/commit/af132dd3)

### Updated themes

* __Coy__
    * Minor improvements ([#2176](http://github.com/PrismJS/prism/issues/2176)) [`7109c18c`](http://github.com/PrismJS/prism/commit/7109c18c)
* __Default__
    * Added a comment that declares the background color of `operator` tokens as intentional ([#2309](http://github.com/PrismJS/prism/issues/2309)) [`937e2691`](http://github.com/PrismJS/prism/commit/937e2691)
* __Okaidia__
    * Update comment text color to meet WCAG contrast recommendations to AA level ([#2292](http://github.com/PrismJS/prism/issues/2292)) [`06495f90`](http://github.com/PrismJS/prism/commit/06495f90)

### Other

* Changelog: Fixed v1.20.0 release date [`cb6349e2`](http://github.com/PrismJS/prism/commit/cb6349e2)
* __Core__
    * Fixed greedy matching bug ([#2032](http://github.com/PrismJS/prism/issues/2032)) [`40285203`](http://github.com/PrismJS/prism/commit/40285203)
    * Added JSDoc ([#1782](http://github.com/PrismJS/prism/issues/1782)) [`4ff555be`](http://github.com/PrismJS/prism/commit/4ff555be)
* __Infrastructure__
    * Update Git repo URL in package.json ([#2334](http://github.com/PrismJS/prism/issues/2334)) [`10f43275`](http://github.com/PrismJS/prism/commit/10f43275)
    * Added docs to ignore files ([#2437](http://github.com/PrismJS/prism/issues/2437)) [`05c9f20b`](http://github.com/PrismJS/prism/commit/05c9f20b)
    * Added `npm run build` command ([#2356](http://github.com/PrismJS/prism/issues/2356)) [`ff74a610`](http://github.com/PrismJS/prism/commit/ff74a610)
    * gulp: Improved `inlineRegexSource` ([#2296](http://github.com/PrismJS/prism/issues/2296)) [`abb800dd`](http://github.com/PrismJS/prism/commit/abb800dd)
    * gulp: Fixed language map ([#2283](http://github.com/PrismJS/prism/issues/2283)) [`11053193`](http://github.com/PrismJS/prism/commit/11053193)
    * gulp: Removed `premerge` task ([#2357](http://github.com/PrismJS/prism/issues/2357)) [`5ff7932b`](http://github.com/PrismJS/prism/commit/5ff7932b)
    * Tests are now faster ([#2165](http://github.com/PrismJS/prism/issues/2165)) [`e756be3f`](http://github.com/PrismJS/prism/commit/e756be3f)
    * Tests: Added extra newlines in pretty token streams ([#2070](http://github.com/PrismJS/prism/issues/2070)) [`681adeef`](http://github.com/PrismJS/prism/commit/681adeef)
    * Tests: Added test for identifier support across all languages ([#2371](http://github.com/PrismJS/prism/issues/2371)) [`48fac3b2`](http://github.com/PrismJS/prism/commit/48fac3b2)
    * Tests: Added test to sort the language list ([#2222](http://github.com/PrismJS/prism/issues/2222)) [`a3758728`](http://github.com/PrismJS/prism/commit/a3758728)
    * Tests: Always pretty-print token streams ([#2421](http://github.com/PrismJS/prism/issues/2421)) [`583e7eb5`](http://github.com/PrismJS/prism/commit/583e7eb5)
    * Tests: Always use `components.json` ([#2370](http://github.com/PrismJS/prism/issues/2370)) [`e416341f`](http://github.com/PrismJS/prism/commit/e416341f)
    * Tests: Better error messages for pattern tests ([#2364](http://github.com/PrismJS/prism/issues/2364)) [`10ca6433`](http://github.com/PrismJS/prism/commit/10ca6433)
    * Tests: Included `console` in VM context ([#2353](http://github.com/PrismJS/prism/issues/2353)) [`b4ed5ded`](http://github.com/PrismJS/prism/commit/b4ed5ded)
* __Website__
    * Fixed typos "Prims" ([#2455](http://github.com/PrismJS/prism/issues/2455)) [`dfa5498a`](http://github.com/PrismJS/prism/commit/dfa5498a)
    * New assets directory for all web-only files ([#2180](http://github.com/PrismJS/prism/issues/2180)) [`91fdd0b1`](http://github.com/PrismJS/prism/commit/91fdd0b1)
    * Improvements ([#2053](http://github.com/PrismJS/prism/issues/2053)) [`ce0fa227`](http://github.com/PrismJS/prism/commit/ce0fa227)
    * Fixed Treeview page ([#2484](http://github.com/PrismJS/prism/issues/2484)) [`a0efa40b`](http://github.com/PrismJS/prism/commit/a0efa40b)
    * Line Numbers: Fixed class name on website [`453079bf`](http://github.com/PrismJS/prism/commit/453079bf)
    * Line Numbers: Improved documentation ([#2456](http://github.com/PrismJS/prism/issues/2456)) [`447429f0`](http://github.com/PrismJS/prism/commit/447429f0)
    * Line Numbers: Style inline code on website ([#2435](http://github.com/PrismJS/prism/issues/2435)) [`ad9c13e2`](http://github.com/PrismJS/prism/commit/ad9c13e2)
    * Filter highlightAll: Fixed typo ([#2391](http://github.com/PrismJS/prism/issues/2391)) [`55bf7ec1`](http://github.com/PrismJS/prism/commit/55bf7ec1)

## 1.20.0 (2020-04-04)

### New components

* __Concurnas__ ([#2206](http://github.com/PrismJS/prism/issues/2206)) [`b24f7348`](http://github.com/PrismJS/prism/commit/b24f7348)
* __DAX__ ([#2248](http://github.com/PrismJS/prism/issues/2248)) [`9227853f`](http://github.com/PrismJS/prism/commit/9227853f)
* __Excel Formula__ ([#2219](http://github.com/PrismJS/prism/issues/2219)) [`bf4f7bfa`](http://github.com/PrismJS/prism/commit/bf4f7bfa)
* __Factor__ ([#2203](http://github.com/PrismJS/prism/issues/2203)) [`f941102e`](http://github.com/PrismJS/prism/commit/f941102e)
* __LLVM IR__ ([#2221](http://github.com/PrismJS/prism/issues/2221)) [`43efde2e`](http://github.com/PrismJS/prism/commit/43efde2e)
* __PowerQuery__ ([#2250](http://github.com/PrismJS/prism/issues/2250)) [`8119e57b`](http://github.com/PrismJS/prism/commit/8119e57b)
* __Solution file__ ([#2213](http://github.com/PrismJS/prism/issues/2213)) [`15983d52`](http://github.com/PrismJS/prism/commit/15983d52)

### Updated components

* __Bash__
    * Added support for escaped quotes ([#2256](http://github.com/PrismJS/prism/issues/2256)) [`328d0e0e`](http://github.com/PrismJS/prism/commit/328d0e0e)
* __BBcode__
    * Added "shortcode" alias ([#2273](http://github.com/PrismJS/prism/issues/2273)) [`57eebced`](http://github.com/PrismJS/prism/commit/57eebced)
* __C/C++/OpenCL C__
    * Improvements ([#2196](http://github.com/PrismJS/prism/issues/2196)) [`674f4b35`](http://github.com/PrismJS/prism/commit/674f4b35)
* __C__
    * Improvemed `comment` pattern ([#2229](http://github.com/PrismJS/prism/issues/2229)) [`fa630726`](http://github.com/PrismJS/prism/commit/fa630726)
* __C#__
    * Fixed keywords in type lists blocking type names ([#2277](http://github.com/PrismJS/prism/issues/2277)) [`947a55bd`](http://github.com/PrismJS/prism/commit/947a55bd)
    * C# improvements ([#1444](http://github.com/PrismJS/prism/issues/1444)) [`42b15463`](http://github.com/PrismJS/prism/commit/42b15463)
* __C++__
    * Added C++20 keywords ([#2236](http://github.com/PrismJS/prism/issues/2236)) [`462ad57e`](http://github.com/PrismJS/prism/commit/462ad57e)
* __CSS__
    * Fixed `url()` containing "@" ([#2272](http://github.com/PrismJS/prism/issues/2272)) [`504a63ba`](http://github.com/PrismJS/prism/commit/504a63ba)
* __CSS Extras__
    * Added support for the selector function ([#2201](http://github.com/PrismJS/prism/issues/2201)) [`2e0eff76`](http://github.com/PrismJS/prism/commit/2e0eff76)
* __Elixir__
    * Added support for attributes names ending with `?` ([#2182](http://github.com/PrismJS/prism/issues/2182)) [`5450e24c`](http://github.com/PrismJS/prism/commit/5450e24c)
* __Java__
    * Added `record` keyword ([#2185](http://github.com/PrismJS/prism/issues/2185)) [`47910b5c`](http://github.com/PrismJS/prism/commit/47910b5c)
* __Markdown__
    * Added support for nested lists ([#2228](http://github.com/PrismJS/prism/issues/2228)) [`73c8a376`](http://github.com/PrismJS/prism/commit/73c8a376)
* __OpenCL__
    * Require C ([#2231](http://github.com/PrismJS/prism/issues/2231)) [`26626ded`](http://github.com/PrismJS/prism/commit/26626ded)
* __PHPDoc__
    * Fixed exponential backtracking ([#2198](http://github.com/PrismJS/prism/issues/2198)) [`3b42536e`](http://github.com/PrismJS/prism/commit/3b42536e)
* __Ruby__
    * Fixed exponential backtracking ([#2225](http://github.com/PrismJS/prism/issues/2225)) [`c5de5aa8`](http://github.com/PrismJS/prism/commit/c5de5aa8)
* __SAS__
    * Fixed SAS' "peerDependencies" ([#2230](http://github.com/PrismJS/prism/issues/2230)) [`7d8ff7ea`](http://github.com/PrismJS/prism/commit/7d8ff7ea)
* __Shell session__
    * Improvements ([#2208](http://github.com/PrismJS/prism/issues/2208)) [`bd16bd57`](http://github.com/PrismJS/prism/commit/bd16bd57)
* __Visual Basic__
    * Added support for comments with line continuations ([#2195](http://github.com/PrismJS/prism/issues/2195)) [`a7d67ca3`](http://github.com/PrismJS/prism/commit/a7d67ca3)
* __YAML__
    * Improvements ([#2226](http://github.com/PrismJS/prism/issues/2226)) [`5362ba16`](http://github.com/PrismJS/prism/commit/5362ba16)
    * Fixed highlighting of anchors and aliases ([#2217](http://github.com/PrismJS/prism/issues/2217)) [`6124c974`](http://github.com/PrismJS/prism/commit/6124c974)

### New plugins

* __Treeview__ ([#2265](http://github.com/PrismJS/prism/issues/2265)) [`be909b18`](http://github.com/PrismJS/prism/commit/be909b18)

### Updated plugins

* __Inline Color__
    * Support for (semi-)transparent colors and minor improvements ([#2223](http://github.com/PrismJS/prism/issues/2223)) [`8d2c5a3e`](http://github.com/PrismJS/prism/commit/8d2c5a3e)
* __Keep Markup__
    * Remove self & document from IIFE arguments ([#2258](http://github.com/PrismJS/prism/issues/2258)) [`3c043338`](http://github.com/PrismJS/prism/commit/3c043338)
* __Toolbar__
    * `data-toolbar-order` is now inherited ([#2205](http://github.com/PrismJS/prism/issues/2205)) [`238f1163`](http://github.com/PrismJS/prism/commit/238f1163)

### Other

* Updated all `String.propotype.replace` calls for literal strings [`5d7aab56`](http://github.com/PrismJS/prism/commit/5d7aab56)
* __Core__
    * Linked list implementation for `matchGrammar` ([#1909](http://github.com/PrismJS/prism/issues/1909)) [`2d4c94cd`](http://github.com/PrismJS/prism/commit/2d4c94cd)
    * Faster `Token.stringify` ([#2171](http://github.com/PrismJS/prism/issues/2171)) [`f683972e`](http://github.com/PrismJS/prism/commit/f683972e)
    * Fixed scope problem in script mode ([#2184](http://github.com/PrismJS/prism/issues/2184)) [`984e5d2e`](http://github.com/PrismJS/prism/commit/984e5d2e)
* __Infrastructure__
    * Travis: Updated NodeJS versions ([#2246](http://github.com/PrismJS/prism/issues/2246)) [`e635260b`](http://github.com/PrismJS/prism/commit/e635260b)
    * gulp: Inline regex source improvement ([#2227](http://github.com/PrismJS/prism/issues/2227)) [`67afc5ad`](http://github.com/PrismJS/prism/commit/67afc5ad)
    * Tests: Added new pattern check for octal escapes ([#2189](http://github.com/PrismJS/prism/issues/2189)) [`81e1c3dd`](http://github.com/PrismJS/prism/commit/81e1c3dd)
    * Tests: Fixed optional dependencies in pattern tests ([#2242](http://github.com/PrismJS/prism/issues/2242)) [`1e3070a2`](http://github.com/PrismJS/prism/commit/1e3070a2)
    * Tests: Added test for zero-width lookbehinds ([#2220](http://github.com/PrismJS/prism/issues/2220)) [`7d03ece4`](http://github.com/PrismJS/prism/commit/7d03ece4)
    * Added tests for examples ([#2216](http://github.com/PrismJS/prism/issues/2216)) [`1f7a245c`](http://github.com/PrismJS/prism/commit/1f7a245c)
* __Website__
    * Removed invalid strings from C# example ([#2266](http://github.com/PrismJS/prism/issues/2266)) [`c917a8ca`](http://github.com/PrismJS/prism/commit/c917a8ca)
    * Fixed Diff highlight plugin page title ([#2233](http://github.com/PrismJS/prism/issues/2233)) [`a82770f8`](http://github.com/PrismJS/prism/commit/a82770f8)
    * Added link to `prism-liquibase` Bash language extension. ([#2191](http://github.com/PrismJS/prism/issues/2191)) [`0bf73dc7`](http://github.com/PrismJS/prism/commit/0bf73dc7)
    * Examples: Updated content header ([#2232](http://github.com/PrismJS/prism/issues/2232)) [`6232878b`](http://github.com/PrismJS/prism/commit/6232878b)
    * Website: Added Coy bug to the known failures page. ([#2170](http://github.com/PrismJS/prism/issues/2170)) [`e9dab85e`](http://github.com/PrismJS/prism/commit/e9dab85e)

## 1.19.0 (2020-01-13)

### New components

* __Latte__ ([#2140](http://github.com/PrismJS/prism/issues/2140)) [`694a81b8`](http://github.com/PrismJS/prism/commit/694a81b8)
* __Neon__ ([#2140](http://github.com/PrismJS/prism/issues/2140)) [`694a81b8`](http://github.com/PrismJS/prism/commit/694a81b8)
* __QML__ ([#2139](http://github.com/PrismJS/prism/issues/2139)) [`c40d96c6`](http://github.com/PrismJS/prism/commit/c40d96c6)

### Updated components

* __Handlebars__
    * Added support for `:` and improved the `variable` pattern ([#2172](http://github.com/PrismJS/prism/issues/2172)) [`ef4d29d9`](http://github.com/PrismJS/prism/commit/ef4d29d9)
* __JavaScript__
    * Added support for keywords after a spread operator ([#2148](http://github.com/PrismJS/prism/issues/2148)) [`1f3f8929`](http://github.com/PrismJS/prism/commit/1f3f8929)
    * Better regex detection ([#2158](http://github.com/PrismJS/prism/issues/2158)) [`a23d8f84`](http://github.com/PrismJS/prism/commit/a23d8f84)
* __Markdown__
    * Better language detection for code blocks ([#2114](http://github.com/PrismJS/prism/issues/2114)) [`d7ad48f9`](http://github.com/PrismJS/prism/commit/d7ad48f9)
* __OCaml__
    * Improvements ([#2179](http://github.com/PrismJS/prism/issues/2179)) [`2a570fd4`](http://github.com/PrismJS/prism/commit/2a570fd4)
* __PHP__
    * Fixed exponential runtime of a pattern ([#2157](http://github.com/PrismJS/prism/issues/2157)) [`24c8f833`](http://github.com/PrismJS/prism/commit/24c8f833)
* __React JSX__
    * Improved spread operator in tag attributes ([#2159](http://github.com/PrismJS/prism/issues/2159)) [`fd857e7b`](http://github.com/PrismJS/prism/commit/fd857e7b)
    * Made `$` a valid character for attribute names ([#2144](http://github.com/PrismJS/prism/issues/2144)) [`f018cf04`](http://github.com/PrismJS/prism/commit/f018cf04)
* __Reason__
    * Added support for single line comments ([#2150](http://github.com/PrismJS/prism/issues/2150)) [`7f1c55b7`](http://github.com/PrismJS/prism/commit/7f1c55b7)
* __Ruby__
    * Override 'class-name' definition ([#2135](http://github.com/PrismJS/prism/issues/2135)) [`401d4b02`](http://github.com/PrismJS/prism/commit/401d4b02)
* __SAS__
    * Added CASL support ([#2112](http://github.com/PrismJS/prism/issues/2112)) [`99d979a0`](http://github.com/PrismJS/prism/commit/99d979a0)

### Updated plugins

* __Custom Class__
    * Fixed TypeError when mapper is undefined ([#2167](http://github.com/PrismJS/prism/issues/2167)) [`543f04d7`](http://github.com/PrismJS/prism/commit/543f04d7)

### Updated themes

* Added missing `.token` selector ([#2161](http://github.com/PrismJS/prism/issues/2161)) [`86780457`](http://github.com/PrismJS/prism/commit/86780457)

### Other

* Added a check for redundant dependency declarations ([#2142](http://github.com/PrismJS/prism/issues/2142)) [`a06aca06`](http://github.com/PrismJS/prism/commit/a06aca06)
* Added a check for examples ([#2128](http://github.com/PrismJS/prism/issues/2128)) [`0b539136`](http://github.com/PrismJS/prism/commit/0b539136)
* Added silent option to `loadLanguages` ([#2147](http://github.com/PrismJS/prism/issues/2147)) [`191b4116`](http://github.com/PrismJS/prism/commit/191b4116)
* __Infrastructure__
    * Dependencies: Improved `getLoader` ([#2151](http://github.com/PrismJS/prism/issues/2151)) [`199bdcae`](http://github.com/PrismJS/prism/commit/199bdcae)
    * Updated gulp to v4.0.2 ([#2178](http://github.com/PrismJS/prism/issues/2178)) [`e5678a00`](http://github.com/PrismJS/prism/commit/e5678a00)
* __Website__
    * Custom Class: Fixed examples ([#2160](http://github.com/PrismJS/prism/issues/2160)) [`0c2fe405`](http://github.com/PrismJS/prism/commit/0c2fe405)
    * Added documentation for new dependency API ([#2141](http://github.com/PrismJS/prism/issues/2141)) [`59068d67`](http://github.com/PrismJS/prism/commit/59068d67)

## 1.18.0 (2020-01-04)

### New components

* __ANTLR4__ ([#2063](http://github.com/PrismJS/prism/issues/2063)) [`aaaa29a8`](http://github.com/PrismJS/prism/commit/aaaa29a8)
* __AQL__ ([#2025](http://github.com/PrismJS/prism/issues/2025)) [`3fdb7d55`](http://github.com/PrismJS/prism/commit/3fdb7d55)
* __BBcode__ ([#2095](http://github.com/PrismJS/prism/issues/2095)) [`aaf13aa6`](http://github.com/PrismJS/prism/commit/aaf13aa6)
* __BrightScript__ ([#2096](http://github.com/PrismJS/prism/issues/2096)) [`631f1e34`](http://github.com/PrismJS/prism/commit/631f1e34)
* __Embedded Lua templating__ ([#2050](http://github.com/PrismJS/prism/issues/2050)) [`0b771c90`](http://github.com/PrismJS/prism/commit/0b771c90)
* __Firestore security rules__ ([#2010](http://github.com/PrismJS/prism/issues/2010)) [`9f722586`](http://github.com/PrismJS/prism/commit/9f722586)
* __FreeMarker Template Language__ ([#2080](http://github.com/PrismJS/prism/issues/2080)) [`2f3da7e8`](http://github.com/PrismJS/prism/commit/2f3da7e8)
* __GDScript__ ([#2006](http://github.com/PrismJS/prism/issues/2006)) [`e2b99f40`](http://github.com/PrismJS/prism/commit/e2b99f40)
* __MoonScript__ ([#2100](http://github.com/PrismJS/prism/issues/2100)) [`f31946b3`](http://github.com/PrismJS/prism/commit/f31946b3)
* __Robot Framework__ (only the plain text format) ([#2034](http://github.com/PrismJS/prism/issues/2034)) [`f7eaa618`](http://github.com/PrismJS/prism/commit/f7eaa618)
* __Solidity (Ethereum)__ ([#2031](http://github.com/PrismJS/prism/issues/2031)) [`cc2cf3f7`](http://github.com/PrismJS/prism/commit/cc2cf3f7)
* __SPARQL__ ([#2033](http://github.com/PrismJS/prism/issues/2033)) [`c42f877d`](http://github.com/PrismJS/prism/commit/c42f877d)
* __SQF: Status Quo Function (Arma 3)__ ([#2079](http://github.com/PrismJS/prism/issues/2079)) [`cfac94ec`](http://github.com/PrismJS/prism/commit/cfac94ec)
* __Turtle__ & __TriG__ ([#2012](http://github.com/PrismJS/prism/issues/2012)) [`508d57ac`](http://github.com/PrismJS/prism/commit/508d57ac)
* __Zig__ ([#2019](http://github.com/PrismJS/prism/issues/2019)) [`a7cf56b7`](http://github.com/PrismJS/prism/commit/a7cf56b7)

### Updated components

* Minor improvements for C-like and Clojure ([#2064](http://github.com/PrismJS/prism/issues/2064)) [`7db0cab3`](http://github.com/PrismJS/prism/commit/7db0cab3)
* Inlined some unnecessary rest properties ([#2082](http://github.com/PrismJS/prism/issues/2082)) [`ad3fa443`](http://github.com/PrismJS/prism/commit/ad3fa443)
* __AQL__
    * Disallow unclosed multiline comments again ([#2089](http://github.com/PrismJS/prism/issues/2089)) [`717ace02`](http://github.com/PrismJS/prism/commit/717ace02)
    * Allow unclosed multi-line comments ([#2058](http://github.com/PrismJS/prism/issues/2058)) [`f3c6ba59`](http://github.com/PrismJS/prism/commit/f3c6ba59)
    * More pseudo keywords ([#2055](http://github.com/PrismJS/prism/issues/2055)) [`899574eb`](http://github.com/PrismJS/prism/commit/899574eb)
    * Added missing keyword + minor improvements ([#2047](http://github.com/PrismJS/prism/issues/2047)) [`32a4c422`](http://github.com/PrismJS/prism/commit/32a4c422)
* __Clojure__
    * Added multiline strings (lisp style) ([#2061](http://github.com/PrismJS/prism/issues/2061)) [`8ea685b8`](http://github.com/PrismJS/prism/commit/8ea685b8)
* __CSS Extras__
    * CSS Extras & PHP: Fixed too greedy number token ([#2009](http://github.com/PrismJS/prism/issues/2009)) [`ebe363f4`](http://github.com/PrismJS/prism/commit/ebe363f4)
* __D__
    * Fixed strings ([#2029](http://github.com/PrismJS/prism/issues/2029)) [`010a0157`](http://github.com/PrismJS/prism/commit/010a0157)
* __Groovy__
    * Minor improvements ([#2036](http://github.com/PrismJS/prism/issues/2036)) [`fb618331`](http://github.com/PrismJS/prism/commit/fb618331)
* __Java__
    * Added missing `::` operator ([#2101](http://github.com/PrismJS/prism/issues/2101)) [`ee7fdbee`](http://github.com/PrismJS/prism/commit/ee7fdbee)
    * Added support for new Java 13 syntax ([#2060](http://github.com/PrismJS/prism/issues/2060)) [`a7b95dd3`](http://github.com/PrismJS/prism/commit/a7b95dd3)
* __JavaScript__
    * Added Optional Chaining and Nullish Coalescing ([#2084](http://github.com/PrismJS/prism/issues/2084)) [`fdb7de0d`](http://github.com/PrismJS/prism/commit/fdb7de0d)
    * Tokenize `:` as an operator ([#2073](http://github.com/PrismJS/prism/issues/2073)) [`0e5c48d1`](http://github.com/PrismJS/prism/commit/0e5c48d1)
* __Less__
    * Fixed exponential backtracking ([#2016](http://github.com/PrismJS/prism/issues/2016)) [`d03d19b4`](http://github.com/PrismJS/prism/commit/d03d19b4)
* __Markup__
    * Improved doctype pattern ([#2094](http://github.com/PrismJS/prism/issues/2094)) [`99994c58`](http://github.com/PrismJS/prism/commit/99994c58)
* __Python__
    * Fixed decorators ([#2018](http://github.com/PrismJS/prism/issues/2018)) [`5b8a16d9`](http://github.com/PrismJS/prism/commit/5b8a16d9)
* __Robot Framework__
    * Rename "robot-framework" to "robotframework" ([#2113](http://github.com/PrismJS/prism/issues/2113)) [`baa78774`](http://github.com/PrismJS/prism/commit/baa78774)
* __Ruby__
    * Made `true` and `false` booleans ([#2098](http://github.com/PrismJS/prism/issues/2098)) [`68d1c472`](http://github.com/PrismJS/prism/commit/68d1c472)
    * Added missing keywords ([#2097](http://github.com/PrismJS/prism/issues/2097)) [`f460eafc`](http://github.com/PrismJS/prism/commit/f460eafc)
* __SAS__
    * Added support for embedded Groovy and Lua code ([#2091](http://github.com/PrismJS/prism/issues/2091)) [`3640b3f2`](http://github.com/PrismJS/prism/commit/3640b3f2)
    * Minor improvements ([#2085](http://github.com/PrismJS/prism/issues/2085)) [`07020c7a`](http://github.com/PrismJS/prism/commit/07020c7a)
    * Fixed `proc-args` token by removing backreferences from string pattern ([#2013](http://github.com/PrismJS/prism/issues/2013)) [`af5a36ae`](http://github.com/PrismJS/prism/commit/af5a36ae)
    * Major improvements ([#1981](http://github.com/PrismJS/prism/issues/1981)) [`076f6155`](http://github.com/PrismJS/prism/commit/076f6155)
* __Smalltalk__
    * Fixed single quote character literal ([#2041](http://github.com/PrismJS/prism/issues/2041)) [`1aabcd17`](http://github.com/PrismJS/prism/commit/1aabcd17)
* __Turtle__
    * Minor improvements ([#2038](http://github.com/PrismJS/prism/issues/2038)) [`8ccd258b`](http://github.com/PrismJS/prism/commit/8ccd258b)
* __TypeScript__
    * Added missing keyword `undefined` ([#2088](http://github.com/PrismJS/prism/issues/2088)) [`c8b48b9f`](http://github.com/PrismJS/prism/commit/c8b48b9f)

### Updated plugins

* New Match Braces plugin ([#1944](http://github.com/PrismJS/prism/issues/1944)) [`365faade`](http://github.com/PrismJS/prism/commit/365faade)
* New Inline color plugin ([#2007](http://github.com/PrismJS/prism/issues/2007)) [`8403e453`](http://github.com/PrismJS/prism/commit/8403e453)
* New Filter highlightAll plugin ([#2074](http://github.com/PrismJS/prism/issues/2074)) [`a7f70090`](http://github.com/PrismJS/prism/commit/a7f70090)
* __Custom Class__
    * New class adder feature ([#2075](http://github.com/PrismJS/prism/issues/2075)) [`dab7998e`](http://github.com/PrismJS/prism/commit/dab7998e)
* __File Highlight__
    * Made the download button its own plugin ([#1840](http://github.com/PrismJS/prism/issues/1840)) [`c6c62a69`](http://github.com/PrismJS/prism/commit/c6c62a69)

### Other

* Issue template improvements ([#2069](http://github.com/PrismJS/prism/issues/2069)) [`53f07b1b`](http://github.com/PrismJS/prism/commit/53f07b1b)
* Readme: Links now use HTTPS if available ([#2045](http://github.com/PrismJS/prism/issues/2045)) [`6cd0738a`](http://github.com/PrismJS/prism/commit/6cd0738a)
* __Core__
    * Fixed null reference ([#2106](http://github.com/PrismJS/prism/issues/2106)) [`0fd062d5`](http://github.com/PrismJS/prism/commit/0fd062d5)
    * Fixed race condition caused by deferring the script ([#2103](http://github.com/PrismJS/prism/issues/2103)) [`a3785ec9`](http://github.com/PrismJS/prism/commit/a3785ec9)
    * Minor improvements ([#1973](http://github.com/PrismJS/prism/issues/1973)) [`2d858e0a`](http://github.com/PrismJS/prism/commit/2d858e0a)
    * Fixed greedy partial lookbehinds not working ([#2030](http://github.com/PrismJS/prism/issues/2030)) [`174ed103`](http://github.com/PrismJS/prism/commit/174ed103)
    * Fixed greedy targeting bug ([#1932](http://github.com/PrismJS/prism/issues/1932)) [`e864d518`](http://github.com/PrismJS/prism/commit/e864d518)
    * Doubly check the `manual` flag ([#1957](http://github.com/PrismJS/prism/issues/1957)) [`d49f0f26`](http://github.com/PrismJS/prism/commit/d49f0f26)
    * IE11 workaround for `currentScript` ([#2104](http://github.com/PrismJS/prism/issues/2104)) [`2108c60f`](http://github.com/PrismJS/prism/commit/2108c60f)
* __Infrastructure__
    * gulp: Fixed changes task [`2f495905`](http://github.com/PrismJS/prism/commit/2f495905)
    * npm: Added `.github` folder to npm ignore ([#2052](http://github.com/PrismJS/prism/issues/2052)) [`1af89e06`](http://github.com/PrismJS/prism/commit/1af89e06)
    * npm: Updated dependencies to fix 122 vulnerabilities ([#1997](http://github.com/PrismJS/prism/issues/1997)) [`3af5d744`](http://github.com/PrismJS/prism/commit/3af5d744)
    * Tests: New test for unused capturing groups ([#1996](http://github.com/PrismJS/prism/issues/1996)) [`c187e229`](http://github.com/PrismJS/prism/commit/c187e229)
    * Tests: Simplified error message format ([#2056](http://github.com/PrismJS/prism/issues/2056)) [`007c9af4`](http://github.com/PrismJS/prism/commit/007c9af4)
    * Tests: New test for nice names ([#1911](http://github.com/PrismJS/prism/issues/1911)) [`3fda5c95`](http://github.com/PrismJS/prism/commit/3fda5c95)
    * Standardized dependency logic implementation ([#1998](http://github.com/PrismJS/prism/issues/1998)) [`7a4a0c7c`](http://github.com/PrismJS/prism/commit/7a4a0c7c)
* __Website__
    * Added @mAAdhaTTah and @RunDevelopment to credits and footer [`5d07aa7c`](http://github.com/PrismJS/prism/commit/5d07aa7c)
    * Added plugin descriptions to plugin list ([#2076](http://github.com/PrismJS/prism/issues/2076)) [`cdfa60ac`](http://github.com/PrismJS/prism/commit/cdfa60ac)
    * Use HTTPS link to alistapart.com ([#2044](http://github.com/PrismJS/prism/issues/2044)) [`8bcc1b85`](http://github.com/PrismJS/prism/commit/8bcc1b85)
    * Fixed the Toolbar plugin's overflow issue ([#1966](http://github.com/PrismJS/prism/issues/1966)) [`56a8711c`](http://github.com/PrismJS/prism/commit/56a8711c)
    * FAQ update ([#1977](http://github.com/PrismJS/prism/issues/1977)) [`8a572af5`](http://github.com/PrismJS/prism/commit/8a572af5)
    * Use modern JavaScript in the NodeJS usage section ([#1942](http://github.com/PrismJS/prism/issues/1942)) [`5c68a556`](http://github.com/PrismJS/prism/commit/5c68a556)
    * Improved test page performance for Chromium ([#2020](http://github.com/PrismJS/prism/issues/2020)) [`3509f3e5`](http://github.com/PrismJS/prism/commit/3509f3e5)
    * Fixed alias example in extending page ([#2011](http://github.com/PrismJS/prism/issues/2011)) [`7cb65eec`](http://github.com/PrismJS/prism/commit/7cb65eec)
    * Robot Framework: Renamed example file ([#2126](http://github.com/PrismJS/prism/issues/2126)) [`9908ca69`](http://github.com/PrismJS/prism/commit/9908ca69)

## 1.17.1 (2019-07-21)

### Other

* __Infrastructure__
    * Add .DS_Store to npmignore [`c2229ec2`](http://github.com/PrismJS/prism/commit/c2229ec2)

## 1.17.0 (2019-07-21)

### New components

* __DNS zone file__ ([#1961](http://github.com/PrismJS/prism/issues/1961)) [`bb84f98c`](http://github.com/PrismJS/prism/commit/bb84f98c)
* __JQ__ ([#1896](http://github.com/PrismJS/prism/issues/1896)) [`73d964be`](http://github.com/PrismJS/prism/commit/73d964be)
* __JS Templates__: Syntax highlighting inside tagged template literals ([#1931](http://github.com/PrismJS/prism/issues/1931)) [`c8844286`](http://github.com/PrismJS/prism/commit/c8844286)
* __LilyPond__ ([#1967](http://github.com/PrismJS/prism/issues/1967)) [`5d992fc5`](http://github.com/PrismJS/prism/commit/5d992fc5)
* __PascaLIGO__ ([#1947](http://github.com/PrismJS/prism/issues/1947)) [`858201c7`](http://github.com/PrismJS/prism/commit/858201c7)
* __PC-Axis__ ([#1940](http://github.com/PrismJS/prism/issues/1940)) [`473f7fbd`](http://github.com/PrismJS/prism/commit/473f7fbd)
* __Shell session__ ([#1892](http://github.com/PrismJS/prism/issues/1892)) [`96044979`](http://github.com/PrismJS/prism/commit/96044979)
* __Splunk SPL__ ([#1962](http://github.com/PrismJS/prism/issues/1962)) [`c93c066b`](http://github.com/PrismJS/prism/commit/c93c066b)

### New plugins

* __Diff Highlight__: Syntax highlighting inside diff blocks ([#1889](http://github.com/PrismJS/prism/issues/1889)) [`e7702ae1`](http://github.com/PrismJS/prism/commit/e7702ae1)

### Updated components

* __Bash__
    * Major improvements ([#1443](http://github.com/PrismJS/prism/issues/1443)) [`363281b3`](http://github.com/PrismJS/prism/commit/363281b3)
* __C#__
    * Added `cs` alias ([#1899](http://github.com/PrismJS/prism/issues/1899)) [`a8164559`](http://github.com/PrismJS/prism/commit/a8164559)
* __C++__
    * Fixed number pattern ([#1887](http://github.com/PrismJS/prism/issues/1887)) [`3de29e72`](http://github.com/PrismJS/prism/commit/3de29e72)
* __CSS__
    * Extended `url` inside ([#1874](http://github.com/PrismJS/prism/issues/1874)) [`f0a10669`](http://github.com/PrismJS/prism/commit/f0a10669)
    * Removed unnecessary flag and modifier ([#1875](http://github.com/PrismJS/prism/issues/1875)) [`74050c68`](http://github.com/PrismJS/prism/commit/74050c68)
* __CSS Extras__
    * Added `even` & `odd` keywords to `n-th` pattern ([#1872](http://github.com/PrismJS/prism/issues/1872)) [`5e5a3e00`](http://github.com/PrismJS/prism/commit/5e5a3e00)
* __F#__
    * Improved character literals ([#1956](http://github.com/PrismJS/prism/issues/1956)) [`d58d2aeb`](http://github.com/PrismJS/prism/commit/d58d2aeb)
* __JavaScript__
    * Fixed escaped template interpolation ([#1931](http://github.com/PrismJS/prism/issues/1931)) [`c8844286`](http://github.com/PrismJS/prism/commit/c8844286)
    * Added support for private fields ([#1950](http://github.com/PrismJS/prism/issues/1950)) [`7bd08327`](http://github.com/PrismJS/prism/commit/7bd08327)
    * Added support for numeric separators ([#1895](http://github.com/PrismJS/prism/issues/1895)) [`6068bf18`](http://github.com/PrismJS/prism/commit/6068bf18)
    * Increased bracket count of interpolation expressions in template strings ([#1845](http://github.com/PrismJS/prism/issues/1845)) [`c13d6e7d`](http://github.com/PrismJS/prism/commit/c13d6e7d)
    * Added support for the `s` regex flag ([#1846](http://github.com/PrismJS/prism/issues/1846)) [`9e164935`](http://github.com/PrismJS/prism/commit/9e164935)
    * Formatting: Added missing semicolon ([#1856](http://github.com/PrismJS/prism/issues/1856)) [`e2683959`](http://github.com/PrismJS/prism/commit/e2683959)
* __JSON__
    * Kinda fixed comment issue ([#1853](http://github.com/PrismJS/prism/issues/1853)) [`cbe05ec3`](http://github.com/PrismJS/prism/commit/cbe05ec3)
* __Julia__
    * Added `struct` keyword ([#1941](http://github.com/PrismJS/prism/issues/1941)) [`feb1b6f5`](http://github.com/PrismJS/prism/commit/feb1b6f5)
    * Highlight `Inf` and `NaN` as constants ([#1921](http://github.com/PrismJS/prism/issues/1921)) [`2141129f`](http://github.com/PrismJS/prism/commit/2141129f)
    * Added `in` keyword ([#1918](http://github.com/PrismJS/prism/issues/1918)) [`feb3187f`](http://github.com/PrismJS/prism/commit/feb3187f)
* __LaTeX__
    * Added TeX and ConTeXt alias ([#1915](http://github.com/PrismJS/prism/issues/1915)) [`5ad58a75`](http://github.com/PrismJS/prism/commit/5ad58a75)
    * Added support for $$ equations [`6f53f749`](http://github.com/PrismJS/prism/commit/6f53f749)
* __Markdown__
    * Markdown: Added support for auto-loading code block languages ([#1898](http://github.com/PrismJS/prism/issues/1898)) [`05823e88`](http://github.com/PrismJS/prism/commit/05823e88)
    * Improved URLs ([#1955](http://github.com/PrismJS/prism/issues/1955)) [`b9ec6fd8`](http://github.com/PrismJS/prism/commit/b9ec6fd8)
    * Added support for nested bold and italic expressions ([#1897](http://github.com/PrismJS/prism/issues/1897)) [`11903721`](http://github.com/PrismJS/prism/commit/11903721)
    * Added support for tables ([#1848](http://github.com/PrismJS/prism/issues/1848)) [`cedb8e84`](http://github.com/PrismJS/prism/commit/cedb8e84)
* __Perl__
    * Added `return` keyword ([#1943](http://github.com/PrismJS/prism/issues/1943)) [`2f39de97`](http://github.com/PrismJS/prism/commit/2f39de97)
* __Protocol Buffers__
    * Full support for PB2 and PB3 syntax + numerous other improvements ([#1948](http://github.com/PrismJS/prism/issues/1948)) [`de10bd1d`](http://github.com/PrismJS/prism/commit/de10bd1d)
* __reST (reStructuredText)__
    * Fixed exponentially backtracking pattern ([#1986](http://github.com/PrismJS/prism/issues/1986)) [`8b5d67a3`](http://github.com/PrismJS/prism/commit/8b5d67a3)
* __Rust__
    * Added `async` and `await` keywords. ([#1882](http://github.com/PrismJS/prism/issues/1882)) [`4faa3314`](http://github.com/PrismJS/prism/commit/4faa3314)
    * Improved punctuation and operators ([#1839](http://github.com/PrismJS/prism/issues/1839)) [`a42b1557`](http://github.com/PrismJS/prism/commit/a42b1557)
* __Sass (Scss)__
    * Fixed exponential url pattern ([#1938](http://github.com/PrismJS/prism/issues/1938)) [`4b6b6e8b`](http://github.com/PrismJS/prism/commit/4b6b6e8b)
* __Scheme__
    * Added support for rational number literals ([#1964](http://github.com/PrismJS/prism/issues/1964)) [`e8811d22`](http://github.com/PrismJS/prism/commit/e8811d22)
* __TOML__
    * Minor improvements ([#1917](http://github.com/PrismJS/prism/issues/1917)) [`3e181241`](http://github.com/PrismJS/prism/commit/3e181241)
* __Visual Basic__
    * Added support for interpolation strings ([#1971](http://github.com/PrismJS/prism/issues/1971)) [`4a2c90c1`](http://github.com/PrismJS/prism/commit/4a2c90c1)

### Updated plugins

* __Autolinker__
    * Improved component path guessing ([#1928](http://github.com/PrismJS/prism/issues/1928)) [`452d5c7d`](http://github.com/PrismJS/prism/commit/452d5c7d)
    * Improved URL regex ([#1842](http://github.com/PrismJS/prism/issues/1842)) [`eb28b62b`](http://github.com/PrismJS/prism/commit/eb28b62b)
* __Autoloader__
    * Fixed and improved callbacks ([#1935](http://github.com/PrismJS/prism/issues/1935)) [`b19f512f`](http://github.com/PrismJS/prism/commit/b19f512f)
* __Command Line__
    * Fix for uncaught errors for empty 'commandLine' object. ([#1862](http://github.com/PrismJS/prism/issues/1862)) [`c24831b5`](http://github.com/PrismJS/prism/commit/c24831b5)
* __Copy to Clipboard Button__
    * Switch anchor to button ([#1926](http://github.com/PrismJS/prism/issues/1926)) [`79880197`](http://github.com/PrismJS/prism/commit/79880197)
* __Custom Class__
    * Added mapper functions for language specific transformations ([#1873](http://github.com/PrismJS/prism/issues/1873)) [`acceb3b5`](http://github.com/PrismJS/prism/commit/acceb3b5)
* __Line Highlight__
    * Batching DOM read/writes to avoid reflows ([#1865](http://github.com/PrismJS/prism/issues/1865)) [`632ce00c`](http://github.com/PrismJS/prism/commit/632ce00c)
* __Toolbar__
    * Added `className` option for toolbar items ([#1951](http://github.com/PrismJS/prism/issues/1951)) [`5ab28bbe`](http://github.com/PrismJS/prism/commit/5ab28bbe)
    * Set opacity to 1 when focus is within ([#1927](http://github.com/PrismJS/prism/issues/1927)) [`0b1662dd`](http://github.com/PrismJS/prism/commit/0b1662dd)

### Updated themes

* __Funky__
    * Fixed typo ([#1960](http://github.com/PrismJS/prism/issues/1960)) [`7d056591`](http://github.com/PrismJS/prism/commit/7d056591)

### Other

* README: Added npm downloads badge ([#1934](http://github.com/PrismJS/prism/issues/1934)) [`d673d701`](http://github.com/PrismJS/prism/commit/d673d701)
* README: Minor changes ([#1857](http://github.com/PrismJS/prism/issues/1857)) [`77e403cb`](http://github.com/PrismJS/prism/commit/77e403cb)
* Clearer description for the highlighting bug report template ([#1850](http://github.com/PrismJS/prism/issues/1850)) [`2f9c9261`](http://github.com/PrismJS/prism/commit/2f9c9261)
* More language examples ([#1917](http://github.com/PrismJS/prism/issues/1917)) [`3e181241`](http://github.com/PrismJS/prism/commit/3e181241)
* __Core__
    * Removed `env.elements` from `before-highlightall` hook ([#1968](http://github.com/PrismJS/prism/issues/1968)) [`9d9e2ca4`](http://github.com/PrismJS/prism/commit/9d9e2ca4)
    * Made `language-none` the default language ([#1858](http://github.com/PrismJS/prism/issues/1858)) [`fd691c52`](http://github.com/PrismJS/prism/commit/fd691c52)
    * Removed `parent` from the `wrap` hook's environment ([#1837](http://github.com/PrismJS/prism/issues/1837)) [`65a4e894`](http://github.com/PrismJS/prism/commit/65a4e894)
* __Infrastructure__
    * gulp: Split `gulpfile.js` and expanded `changes` task ([#1835](http://github.com/PrismJS/prism/issues/1835)) [`033c5ad8`](http://github.com/PrismJS/prism/commit/033c5ad8)
    * gulp: JSON formatting for partly generated files ([#1933](http://github.com/PrismJS/prism/issues/1933)) [`d4373f3a`](http://github.com/PrismJS/prism/commit/d4373f3a)
    * gulp: Use `async` functions & drop testing on Node v6 ([#1783](http://github.com/PrismJS/prism/issues/1783)) [`0dd44d53`](http://github.com/PrismJS/prism/commit/0dd44d53)
    * Tests: `lookbehind` test for patterns ([#1890](http://github.com/PrismJS/prism/issues/1890)) [`3ba786cd`](http://github.com/PrismJS/prism/commit/3ba786cd)
    * Tests: Added test for empty regexes ([#1847](http://github.com/PrismJS/prism/issues/1847)) [`c1e6a7fd`](http://github.com/PrismJS/prism/commit/c1e6a7fd)
* __Website__
    * Added tutorial for using PrismJS with React ([#1979](http://github.com/PrismJS/prism/issues/1979)) [`f1e16c7b`](http://github.com/PrismJS/prism/commit/f1e16c7b)
    * Update footer's GitHub repository URL and capitalisation of "GitHub" ([#1983](http://github.com/PrismJS/prism/issues/1983)) [`bab744a6`](http://github.com/PrismJS/prism/commit/bab744a6)
    * Added known failures page ([#1876](http://github.com/PrismJS/prism/issues/1876)) [`36a5fa0e`](http://github.com/PrismJS/prism/commit/36a5fa0e)
    * Added basic usage for CDNs ([#1924](http://github.com/PrismJS/prism/issues/1924)) [`922ec555`](http://github.com/PrismJS/prism/commit/922ec555)
    * New tutorial for Drupal ([#1859](http://github.com/PrismJS/prism/issues/1859)) [`d2089d83`](http://github.com/PrismJS/prism/commit/d2089d83)
    * Updated website page styles to not interfere with themes ([#1952](http://github.com/PrismJS/prism/issues/1952)) [`b6543853`](http://github.com/PrismJS/prism/commit/b6543853)
    * Download page: Improved performance for Chromium-based browsers ([#1907](http://github.com/PrismJS/prism/issues/1907)) [`11f18e36`](http://github.com/PrismJS/prism/commit/11f18e36)
    * Download page: Fixed Edge's word wrap ([#1920](http://github.com/PrismJS/prism/issues/1920)) [`5d191b92`](http://github.com/PrismJS/prism/commit/5d191b92)
    * Examples page: Minor improvements ([#1919](http://github.com/PrismJS/prism/issues/1919)) [`a16d4a25`](http://github.com/PrismJS/prism/commit/a16d4a25)
    * Extending page: Fixed typo + new alias section ([#1949](http://github.com/PrismJS/prism/issues/1949)) [`24c8e717`](http://github.com/PrismJS/prism/commit/24c8e717)
    * Extending page: Added "Creating a new language definition" section ([#1925](http://github.com/PrismJS/prism/issues/1925)) [`ddf81233`](http://github.com/PrismJS/prism/commit/ddf81233)
    * Test page: Use `prism-core.js` instead of `prism.js` ([#1908](http://github.com/PrismJS/prism/issues/1908)) [`0853e694`](http://github.com/PrismJS/prism/commit/0853e694)
    * Copy to clipboard: Fixed typo ([#1869](http://github.com/PrismJS/prism/issues/1869)) [`59d4323f`](http://github.com/PrismJS/prism/commit/59d4323f)
    * JSONP Highlight: Fixed examples ([#1877](http://github.com/PrismJS/prism/issues/1877)) [`f8ae465d`](http://github.com/PrismJS/prism/commit/f8ae465d)
    * Line numbers: Fixed typo on webpage ([#1838](http://github.com/PrismJS/prism/issues/1838)) [`0f16eb87`](http://github.com/PrismJS/prism/commit/0f16eb87)

## 1.16.0 (2019-03-24)

### New components

* __ANBF__ ([#1753](http://github.com/PrismJS/prism/issues/1753)) [`6d98f0e7`](http://github.com/PrismJS/prism/commit/6d98f0e7)
* __BNF__ & __RBNF__ ([#1754](http://github.com/PrismJS/prism/issues/1754)) [`1df96c55`](http://github.com/PrismJS/prism/commit/1df96c55)
* __CIL__ ([#1593](http://github.com/PrismJS/prism/issues/1593)) [`38def334`](http://github.com/PrismJS/prism/commit/38def334)
* __CMake__ ([#1820](http://github.com/PrismJS/prism/issues/1820)) [`30779976`](http://github.com/PrismJS/prism/commit/30779976)
* __Doc comment__ ([#1541](http://github.com/PrismJS/prism/issues/1541)) [`493d19ef`](http://github.com/PrismJS/prism/commit/493d19ef)
* __EBNF__ ([#1756](http://github.com/PrismJS/prism/issues/1756)) [`13e1c97d`](http://github.com/PrismJS/prism/commit/13e1c97d)
* __EJS__ ([#1769](http://github.com/PrismJS/prism/issues/1769)) [`c37c90df`](http://github.com/PrismJS/prism/commit/c37c90df)
* __G-code__ ([#1572](http://github.com/PrismJS/prism/issues/1572)) [`2288c25e`](http://github.com/PrismJS/prism/commit/2288c25e)
* __GameMaker Language__ ([#1551](http://github.com/PrismJS/prism/issues/1551)) [`e529edd8`](http://github.com/PrismJS/prism/commit/e529edd8)
* __HCL__ ([#1594](http://github.com/PrismJS/prism/issues/1594)) [`c939df8e`](http://github.com/PrismJS/prism/commit/c939df8e)
* __Java stack trace__ ([#1520](http://github.com/PrismJS/prism/issues/1520)) [`4a8219a4`](http://github.com/PrismJS/prism/commit/4a8219a4)
* __JavaScript Extras__ ([#1743](http://github.com/PrismJS/prism/issues/1743)) [`bb628606`](http://github.com/PrismJS/prism/commit/bb628606)
* __JSON5__ ([#1744](http://github.com/PrismJS/prism/issues/1744)) [`64dc049d`](http://github.com/PrismJS/prism/commit/64dc049d)
* __N1QL__ ([#1620](http://github.com/PrismJS/prism/issues/1620)) [`7def8f5c`](http://github.com/PrismJS/prism/commit/7def8f5c)
* __Nand To Tetris HDL__ ([#1710](http://github.com/PrismJS/prism/issues/1710)) [`b94b56c1`](http://github.com/PrismJS/prism/commit/b94b56c1)
* __Regex__ ([#1682](http://github.com/PrismJS/prism/issues/1682)) [`571704cb`](http://github.com/PrismJS/prism/commit/571704cb)
* __T4__ ([#1699](http://github.com/PrismJS/prism/issues/1699)) [`16f2ad06`](http://github.com/PrismJS/prism/commit/16f2ad06)
* __TOML__ ([#1488](http://github.com/PrismJS/prism/issues/1488)) [`5b6ad70d`](http://github.com/PrismJS/prism/commit/5b6ad70d)
* __Vala__ ([#1658](http://github.com/PrismJS/prism/issues/1658)) [`b48c012c`](http://github.com/PrismJS/prism/commit/b48c012c)

### Updated components

* Fixed dependencies of Pug and Pure ([#1759](http://github.com/PrismJS/prism/issues/1759)) [`c9a32674`](http://github.com/PrismJS/prism/commit/c9a32674)
* Add file extensions support for major languages ([#1478](http://github.com/PrismJS/prism/issues/1478)) [`0c8f6504`](http://github.com/PrismJS/prism/commit/0c8f6504)
* Fixed patterns which can match the empty string ([#1775](http://github.com/PrismJS/prism/issues/1775)) [`86dd3e42`](http://github.com/PrismJS/prism/commit/86dd3e42)
* More variables for better code compression ([#1489](http://github.com/PrismJS/prism/issues/1489)) [`bc53e093`](http://github.com/PrismJS/prism/commit/bc53e093)
* Added missing aliases ([#1830](http://github.com/PrismJS/prism/issues/1830)) [`8d28c74c`](http://github.com/PrismJS/prism/commit/8d28c74c)
* Replaced all occurrences of `new RegExp` with `RegExp` ([#1493](http://github.com/PrismJS/prism/issues/1493)) [`44fed4d3`](http://github.com/PrismJS/prism/commit/44fed4d3)
* Added missing aliases to components.json ([#1503](http://github.com/PrismJS/prism/issues/1503)) [`2fb66e04`](http://github.com/PrismJS/prism/commit/2fb66e04)
* __Apacheconf__
	* Apache config: Minor improvements + new keyword ([#1823](http://github.com/PrismJS/prism/issues/1823)) [`a91be7b2`](http://github.com/PrismJS/prism/commit/a91be7b2)
* __AsciiDoc__
	* Added `adoc` alias for AsciiDoc ([#1685](http://github.com/PrismJS/prism/issues/1685)) [`88434f7a`](http://github.com/PrismJS/prism/commit/88434f7a)
* __Bash__
	* Add additional commands to bash ([#1577](http://github.com/PrismJS/prism/issues/1577)) [`a2230c38`](http://github.com/PrismJS/prism/commit/a2230c38)
	* Added `yarn add` to bash functions ([#1731](http://github.com/PrismJS/prism/issues/1731)) [`3a32cb75`](http://github.com/PrismJS/prism/commit/3a32cb75)
	* Added `pnpm` function to Bash ([#1734](http://github.com/PrismJS/prism/issues/1734)) [`fccfb98d`](http://github.com/PrismJS/prism/commit/fccfb98d)
* __Batch__
	* Remove batch's shell alias ([#1543](http://github.com/PrismJS/prism/issues/1543)) [`7155e60f`](http://github.com/PrismJS/prism/commit/7155e60f)
* __C__
	* Improve C language ([#1697](http://github.com/PrismJS/prism/issues/1697)) [`7eccea5c`](http://github.com/PrismJS/prism/commit/7eccea5c)
* __C-like__
	* Simplify function pattern of C-like language ([#1552](http://github.com/PrismJS/prism/issues/1552)) [`b520e1b6`](http://github.com/PrismJS/prism/commit/b520e1b6)
* __C/C++/Java__
	* Operator fixes ([#1528](http://github.com/PrismJS/prism/issues/1528)) [`7af8f8be`](http://github.com/PrismJS/prism/commit/7af8f8be)
* __C#__
	* Improvements to C# operator and punctuation ([#1532](http://github.com/PrismJS/prism/issues/1532)) [`3b1e0916`](http://github.com/PrismJS/prism/commit/3b1e0916)
* __CSS__
	* Fix tokenizing !important ([#1585](http://github.com/PrismJS/prism/issues/1585)) [`c1d6cb85`](http://github.com/PrismJS/prism/commit/c1d6cb85)
	* Added the comma to the list of CSS punctuation [`7ea2ff28`](http://github.com/PrismJS/prism/commit/7ea2ff28)
	* CSS: Comma punctuation ([#1632](http://github.com/PrismJS/prism/issues/1632)) [`1b812386`](http://github.com/PrismJS/prism/commit/1b812386)
	* Reuse CSS selector pattern in CSS Extras ([#1637](http://github.com/PrismJS/prism/issues/1637)) [`e2f2fd19`](http://github.com/PrismJS/prism/commit/e2f2fd19)
	* Fixed CSS extra variable ([#1649](http://github.com/PrismJS/prism/issues/1649)) [`9de47d3a`](http://github.com/PrismJS/prism/commit/9de47d3a)
	* Identify CSS units and variables ([#1450](http://github.com/PrismJS/prism/issues/1450)) [`5fcee966`](http://github.com/PrismJS/prism/commit/5fcee966)
	* Allow multiline CSS at-rules ([#1676](http://github.com/PrismJS/prism/issues/1676)) [`4f6f3c7d`](http://github.com/PrismJS/prism/commit/4f6f3c7d)
	* CSS: Highlight attribute selector ([#1671](http://github.com/PrismJS/prism/issues/1671)) [`245b59d4`](http://github.com/PrismJS/prism/commit/245b59d4)
	* CSS: Selectors can contain any string ([#1638](http://github.com/PrismJS/prism/issues/1638)) [`a2d445d0`](http://github.com/PrismJS/prism/commit/a2d445d0)
	* CSS extras: Highlighting for pseudo class arguments ([#1650](http://github.com/PrismJS/prism/issues/1650)) [`70a40414`](http://github.com/PrismJS/prism/commit/70a40414)
* __Django__
	* Django/Jinja2 improvements ([#1800](http://github.com/PrismJS/prism/issues/1800)) [`f2467488`](http://github.com/PrismJS/prism/commit/f2467488)
* __F#__
	* Chars can only contain one character ([#1570](http://github.com/PrismJS/prism/issues/1570)) [`f96b083a`](http://github.com/PrismJS/prism/commit/f96b083a)
	* Improve F# ([#1573](http://github.com/PrismJS/prism/issues/1573)) [`00bfc969`](http://github.com/PrismJS/prism/commit/00bfc969)
* __GraphQL__
	* Improved field highlighting for GraphQL ([#1711](http://github.com/PrismJS/prism/issues/1711)) [`44aeffb9`](http://github.com/PrismJS/prism/commit/44aeffb9)
	* Added GraphQL improvements and tests ([#1788](http://github.com/PrismJS/prism/issues/1788)) [`b2298b12`](http://github.com/PrismJS/prism/commit/b2298b12)
* __Haskell__
	* Added `hs` alias for Haskell ([#1831](http://github.com/PrismJS/prism/issues/1831)) [`64baec3c`](http://github.com/PrismJS/prism/commit/64baec3c)
* __HTTP__
	* Improved HTTP content highlighting ([#1598](http://github.com/PrismJS/prism/issues/1598)) [`1b75da90`](http://github.com/PrismJS/prism/commit/1b75da90)
* __Ini__
	* Add support for # comments to INI language ([#1730](http://github.com/PrismJS/prism/issues/1730)) [`baf6bb0c`](http://github.com/PrismJS/prism/commit/baf6bb0c)
* __Java__
	* Add Java 10 support ([#1549](http://github.com/PrismJS/prism/issues/1549)) [`8c981a22`](http://github.com/PrismJS/prism/commit/8c981a22)
	* Added module keywords to Java. ([#1655](http://github.com/PrismJS/prism/issues/1655)) [`6e250a5f`](http://github.com/PrismJS/prism/commit/6e250a5f)
	* Improve Java ([#1474](http://github.com/PrismJS/prism/issues/1474)) [`81bd8f0b`](http://github.com/PrismJS/prism/commit/81bd8f0b)
* __JavaScript__
	* Fix regex for `catch` and `finally` ([#1527](http://github.com/PrismJS/prism/issues/1527)) [`ebd1b9a6`](http://github.com/PrismJS/prism/commit/ebd1b9a6)
	* Highlighting of supposed classes and functions ([#1482](http://github.com/PrismJS/prism/issues/1482)) [`c40f6047`](http://github.com/PrismJS/prism/commit/c40f6047)
	* Added support for JS BigInt literals ([#1542](http://github.com/PrismJS/prism/issues/1542)) [`2b62e57b`](http://github.com/PrismJS/prism/commit/2b62e57b)
	* Fixed lowercase supposed class names ([#1544](http://github.com/PrismJS/prism/issues/1544)) [`a47c05ad`](http://github.com/PrismJS/prism/commit/a47c05ad)
	* Fixes regex for JS examples ([#1591](http://github.com/PrismJS/prism/issues/1591)) [`b41fb8f1`](http://github.com/PrismJS/prism/commit/b41fb8f1)
	* Improve regex detection in JS ([#1473](http://github.com/PrismJS/prism/issues/1473)) [`2a4758ab`](http://github.com/PrismJS/prism/commit/2a4758ab)
	* Identify JavaScript function parameters ([#1446](http://github.com/PrismJS/prism/issues/1446)) [`0cc8c56a`](http://github.com/PrismJS/prism/commit/0cc8c56a)
	* Improved JavaScript parameter recognization ([#1722](http://github.com/PrismJS/prism/issues/1722)) [`57a92035`](http://github.com/PrismJS/prism/commit/57a92035)
	* Make `undefined` a keyword in JS ([#1740](http://github.com/PrismJS/prism/issues/1740)) [`d9fa29a8`](http://github.com/PrismJS/prism/commit/d9fa29a8)
	* Fix `function-variable` in JS ([#1739](http://github.com/PrismJS/prism/issues/1739)) [`bfbea4d6`](http://github.com/PrismJS/prism/commit/bfbea4d6)
	* Improved JS constant pattern ([#1737](http://github.com/PrismJS/prism/issues/1737)) [`7bcec584`](http://github.com/PrismJS/prism/commit/7bcec584)
	* Improved JS function pattern ([#1736](http://github.com/PrismJS/prism/issues/1736)) [`8378ac83`](http://github.com/PrismJS/prism/commit/8378ac83)
	* JS: Fixed variables named "async" ([#1738](http://github.com/PrismJS/prism/issues/1738)) [`3560c643`](http://github.com/PrismJS/prism/commit/3560c643)
	* JS: Keyword fix ([#1808](http://github.com/PrismJS/prism/issues/1808)) [`f2d8e1c7`](http://github.com/PrismJS/prism/commit/f2d8e1c7)
* __JSON__ / __JSONP__
	* Fix bugs in JSON language ([#1479](http://github.com/PrismJS/prism/issues/1479)) [`74fe81c6`](http://github.com/PrismJS/prism/commit/74fe81c6)
	* Adds support for comments in JSON ([#1595](http://github.com/PrismJS/prism/issues/1595)) [`8720b3e6`](http://github.com/PrismJS/prism/commit/8720b3e6)
	* Cleaned up JSON ([#1596](http://github.com/PrismJS/prism/issues/1596)) [`da474c77`](http://github.com/PrismJS/prism/commit/da474c77)
	* Added `keyword` alias to JSON's `null` ([#1733](http://github.com/PrismJS/prism/issues/1733)) [`eee06649`](http://github.com/PrismJS/prism/commit/eee06649)
	* Fix JSONP support ([#1745](http://github.com/PrismJS/prism/issues/1745)) [`b5041cf9`](http://github.com/PrismJS/prism/commit/b5041cf9)
	* Fixed JSON/JSONP examples ([#1765](http://github.com/PrismJS/prism/issues/1765)) [`ae4842db`](http://github.com/PrismJS/prism/commit/ae4842db)
* __JSX__
	* React component tags are styled as classes in JSX ([#1519](http://github.com/PrismJS/prism/issues/1519)) [`3e1a9a3d`](http://github.com/PrismJS/prism/commit/3e1a9a3d)
	* Support JSX/TSX class-name with dot ([#1725](http://github.com/PrismJS/prism/issues/1725)) [`4362e42c`](http://github.com/PrismJS/prism/commit/4362e42c)
* __Less__
	* Remove useless insertBefore in LESS ([#1629](http://github.com/PrismJS/prism/issues/1629)) [`86d31793`](http://github.com/PrismJS/prism/commit/86d31793)
* __Lisp__
	* Fix Lisp exponential string pattern ([#1763](http://github.com/PrismJS/prism/issues/1763)) [`5bd182c0`](http://github.com/PrismJS/prism/commit/5bd182c0))
* __Markdown__
	* Added strike support to markdown ([#1563](http://github.com/PrismJS/prism/issues/1563)) [`9d2fddc2`](http://github.com/PrismJS/prism/commit/9d2fddc2)
	* Fixed Markdown headers ([#1557](http://github.com/PrismJS/prism/issues/1557)) [`c6584290`](http://github.com/PrismJS/prism/commit/c6584290)
	* Add support for code blocks in Markdown ([#1562](http://github.com/PrismJS/prism/issues/1562)) [`b0717e70`](http://github.com/PrismJS/prism/commit/b0717e70)
	* Markdown: The 'md' alias is now recognized by hooks ([#1771](http://github.com/PrismJS/prism/issues/1771)) [`8ca3d65b`](http://github.com/PrismJS/prism/commit/8ca3d65b)
* __Markup__
	* Decouple XML from Markup ([#1603](http://github.com/PrismJS/prism/issues/1603)) [`0030a4ef`](http://github.com/PrismJS/prism/commit/0030a4ef)
	* Fix for markup attributes ([#1752](http://github.com/PrismJS/prism/issues/1752)) [`c3862a24`](http://github.com/PrismJS/prism/commit/c3862a24)
	* Markup: Added support for CSS and JS inside of CDATAs ([#1660](http://github.com/PrismJS/prism/issues/1660)) [`57127701`](http://github.com/PrismJS/prism/commit/57127701)
	* Markup `addInline` improvements ([#1798](http://github.com/PrismJS/prism/issues/1798)) [`af67c32e`](http://github.com/PrismJS/prism/commit/af67c32e)
* __Markup Templating__
	* Markup-templating improvements ([#1653](http://github.com/PrismJS/prism/issues/1653)) [`b62e282b`](http://github.com/PrismJS/prism/commit/b62e282b)
* __nginx__
	* Add new keywords to nginx ([#1587](http://github.com/PrismJS/prism/issues/1587)) [`0d73f7f5`](http://github.com/PrismJS/prism/commit/0d73f7f5)
* __PHP__
	* Update PHP keywords ([#1690](http://github.com/PrismJS/prism/issues/1690)) [`55fb0f8e`](http://github.com/PrismJS/prism/commit/55fb0f8e)
	* Improve recognition of constants in PHP ([#1688](http://github.com/PrismJS/prism/issues/1688)) [`f1026b4b`](http://github.com/PrismJS/prism/commit/f1026b4b)
	* Made false, true, and null constants in PHP ([#1694](http://github.com/PrismJS/prism/issues/1694)) [`439e3bd7`](http://github.com/PrismJS/prism/commit/439e3bd7)
	* PHP: Fixed closing tag issue ([#1652](http://github.com/PrismJS/prism/issues/1652)) [`289ddd9b`](http://github.com/PrismJS/prism/commit/289ddd9b)
* __Python__
	* Operator keywords are now keywords ([#1617](http://github.com/PrismJS/prism/issues/1617)) [`1d1fb800`](http://github.com/PrismJS/prism/commit/1d1fb800)
	* Add decorator support to Python ([#1639](http://github.com/PrismJS/prism/issues/1639)) [`2577b6e6`](http://github.com/PrismJS/prism/commit/2577b6e6)
	* Improvements to Python F-strings and string prefixes ([#1642](http://github.com/PrismJS/prism/issues/1642)) [`a69c2b62`](http://github.com/PrismJS/prism/commit/a69c2b62)
* __Reason__
	* Added additional operators to Reason ([#1648](http://github.com/PrismJS/prism/issues/1648)) [`8b1bb469`](http://github.com/PrismJS/prism/commit/8b1bb469)
* __Ruby__
	* Consistent Ruby method highlighting ([#1523](http://github.com/PrismJS/prism/issues/1523)) [`72775919`](http://github.com/PrismJS/prism/commit/72775919)
	* Ruby/ERB: Fixed block comments ([#1768](http://github.com/PrismJS/prism/issues/1768)) [`c805f859`](http://github.com/PrismJS/prism/commit/c805f859)
* __Rust__
	* Add missing keywords ([#1634](http://github.com/PrismJS/prism/issues/1634)) [`3590edde`](http://github.com/PrismJS/prism/commit/3590edde)
* __SAS__
	* Added new SAS keywords ([#1784](http://github.com/PrismJS/prism/issues/1784)) [`3b396ef5`](http://github.com/PrismJS/prism/commit/3b396ef5)
* __Scheme__
	* Fix function without arguments in scheme language ([#1463](http://github.com/PrismJS/prism/issues/1463)) [`12a827e7`](http://github.com/PrismJS/prism/commit/12a827e7)
	* Scheme improvements ([#1556](http://github.com/PrismJS/prism/issues/1556)) [`225dd3f7`](http://github.com/PrismJS/prism/commit/225dd3f7)
	* Fixed operator-like functions in Scheme ([#1467](http://github.com/PrismJS/prism/issues/1467)) [`f8c8add2`](http://github.com/PrismJS/prism/commit/f8c8add2)
	* Scheme: Minor improvements ([#1814](http://github.com/PrismJS/prism/issues/1814)) [`191830f2`](http://github.com/PrismJS/prism/commit/191830f2)
* __SCSS__
	* Fixed that selector pattern can take exponential time ([#1499](http://github.com/PrismJS/prism/issues/1499)) [`0f75d9d4`](http://github.com/PrismJS/prism/commit/0f75d9d4)
	* Move SCSS `property` definition ([#1633](http://github.com/PrismJS/prism/issues/1633)) [`0536fb14`](http://github.com/PrismJS/prism/commit/0536fb14)
	* Add `keyword` alias for SCSS' `null` ([#1735](http://github.com/PrismJS/prism/issues/1735)) [`bd0378f0`](http://github.com/PrismJS/prism/commit/bd0378f0)
* __Smalltalk__
	* Allowed empty strings and comments ([#1747](http://github.com/PrismJS/prism/issues/1747)) [`5fd7577a`](http://github.com/PrismJS/prism/commit/5fd7577a)
* __Smarty__
	* Removed useless `insertBefore` call in Smarty ([#1677](http://github.com/PrismJS/prism/issues/1677)) [`bc49c361`](http://github.com/PrismJS/prism/commit/bc49c361)
* __SQL__
	* Added support for quote escapes to SQL strings ([#1500](http://github.com/PrismJS/prism/issues/1500)) [`a59a7926`](http://github.com/PrismJS/prism/commit/a59a7926)
	* SQL Quoted variables are now greedy ([#1510](http://github.com/PrismJS/prism/issues/1510)) [`42d119a2`](http://github.com/PrismJS/prism/commit/42d119a2)
* __TypeScript__
	* Enhance definitions in TypeScript component ([#1522](http://github.com/PrismJS/prism/issues/1522)) [`11695629`](http://github.com/PrismJS/prism/commit/11695629)
* __YAML__
	* Allow YAML strings to have trailing comments ([#1602](http://github.com/PrismJS/prism/issues/1602)) [`1c5f28a9`](http://github.com/PrismJS/prism/commit/1c5f28a9)

### Updated plugins

* Better class name detection for plugins ([#1772](http://github.com/PrismJS/prism/issues/1772)) [`c9762c6f`](http://github.com/PrismJS/prism/commit/c9762c6f)
* __Autolinker__
	* Fix Autolinker url-decoding all tokens ([#1723](http://github.com/PrismJS/prism/issues/1723)) [`8cf20d49`](http://github.com/PrismJS/prism/commit/8cf20d49)
* __Autoloader__
	* Resolved variable name clash ([#1568](http://github.com/PrismJS/prism/issues/1568)) [`bfa5a8d9`](http://github.com/PrismJS/prism/commit/bfa5a8d9)
	* Autoloader: Fixed the directory of scripts ([#1828](http://github.com/PrismJS/prism/issues/1828)) [`fd4c764f`](http://github.com/PrismJS/prism/commit/fd4c764f)
	* Autoloader: Added support for aliases ([#1829](http://github.com/PrismJS/prism/issues/1829)) [`52889b5b`](http://github.com/PrismJS/prism/commit/52889b5b)
* __Command Line__
	* Fixed class regex for Command Line plugin ([#1566](http://github.com/PrismJS/prism/issues/1566)) [`9f6e5026`](http://github.com/PrismJS/prism/commit/9f6e5026)
* __File Highlight__
	* Prevent double-loading & add scope to File Highlight ([#1586](http://github.com/PrismJS/prism/issues/1586)) [`10239c14`](http://github.com/PrismJS/prism/commit/10239c14)
* __JSONP Highlight__
	* Cleanup JSONP highlight code ([#1674](http://github.com/PrismJS/prism/issues/1674)) [`28489698`](http://github.com/PrismJS/prism/commit/28489698)
	* Fix typos & other issues in JSONP docs ([#1672](http://github.com/PrismJS/prism/issues/1672)) [`cd058a91`](http://github.com/PrismJS/prism/commit/cd058a91)
	* JSONP highlight: Fixed minified adapter names ([#1793](http://github.com/PrismJS/prism/issues/1793)) [`5dd8f916`](http://github.com/PrismJS/prism/commit/5dd8f916)
* __Keep Markup__
	* Add unit tests to the Keep Markup plugin ([#1646](http://github.com/PrismJS/prism/issues/1646)) [`a944c418`](http://github.com/PrismJS/prism/commit/a944c418)
* __Line Numbers__
	* Added inheritance for the `line-numbers` class ([#1799](http://github.com/PrismJS/prism/issues/1799)) [`14be7489`](http://github.com/PrismJS/prism/commit/14be7489)
* __Previewers__
	* Fixed Previewers bug [#1496](http://github.com/PrismJS/prism/issues/1496) ([#1497](http://github.com/PrismJS/prism/issues/1497)) [`4b56f3c1`](http://github.com/PrismJS/prism/commit/4b56f3c1)
* __Show Invisibles__
	* Updated styles of show invisibles ([#1607](http://github.com/PrismJS/prism/issues/1607)) [`2ba62268`](http://github.com/PrismJS/prism/commit/2ba62268)
	* Corrected load order of Show Invisibles ([#1612](http://github.com/PrismJS/prism/issues/1612)) [`6e0c6e86`](http://github.com/PrismJS/prism/commit/6e0c6e86)
	* Show invisibles inside tokens ([#1610](http://github.com/PrismJS/prism/issues/1610)) [`1090b253`](http://github.com/PrismJS/prism/commit/1090b253)
* __Show Language__
	* Show Language plugin alias support and improvements ([#1683](http://github.com/PrismJS/prism/issues/1683)) [`4c66d72c`](http://github.com/PrismJS/prism/commit/4c66d72c)
* __Toolbar__
	* Toolbar: Minor improvements ([#1818](http://github.com/PrismJS/prism/issues/1818)) [`3ad47047`](http://github.com/PrismJS/prism/commit/3ad47047)

### Updated themes

* Normalized the font-size of pre and code ([#1791](http://github.com/PrismJS/prism/issues/1791)) [`878ef295`](http://github.com/PrismJS/prism/commit/878ef295)
* __Coy__
	* Correct typo ([#1508](http://github.com/PrismJS/prism/issues/1508)) [`c322fc80`](http://github.com/PrismJS/prism/commit/c322fc80)

### Other changes

* __Core__
	* `insertBefore` now correctly updates references ([#1531](http://github.com/PrismJS/prism/issues/1531)) [`9dfec340`](http://github.com/PrismJS/prism/commit/9dfec340)
	* Invoke `callback` after `after-highlight` hook ([#1588](http://github.com/PrismJS/prism/issues/1588)) [`bfbe4464`](http://github.com/PrismJS/prism/commit/bfbe4464)
	* Improve `Prism.util.type` performance ([#1545](http://github.com/PrismJS/prism/issues/1545)) [`2864fe24`](http://github.com/PrismJS/prism/commit/2864fe24)
	* Remove unused `insertBefore` overload ([#1631](http://github.com/PrismJS/prism/issues/1631)) [`39686e12`](http://github.com/PrismJS/prism/commit/39686e12)
	* Ignore duplicates in insertBefore ([#1628](http://github.com/PrismJS/prism/issues/1628)) [`d33d259c`](http://github.com/PrismJS/prism/commit/d33d259c)
	* Remove the Prism.tokenize language parameter ([#1654](http://github.com/PrismJS/prism/issues/1654)) [`fbf0b094`](http://github.com/PrismJS/prism/commit/fbf0b094)
	* Call `insert-before` hook properly ([#1709](http://github.com/PrismJS/prism/issues/1709)) [`393ab164`](http://github.com/PrismJS/prism/commit/393ab164)
	* Improved languages.DFS and util.clone ([#1506](http://github.com/PrismJS/prism/issues/1506)) [`152a68ef`](http://github.com/PrismJS/prism/commit/152a68ef)
	* Core: Avoid redeclaring variables in util.clone ([#1778](http://github.com/PrismJS/prism/issues/1778)) [`b06f532f`](http://github.com/PrismJS/prism/commit/b06f532f)
	* Made prism-core a little more editor friendly ([#1776](http://github.com/PrismJS/prism/issues/1776)) [`bac09f0a`](http://github.com/PrismJS/prism/commit/bac09f0a)
	* Applied Array.isArray ([#1804](http://github.com/PrismJS/prism/issues/1804)) [`11d0f75e`](http://github.com/PrismJS/prism/commit/11d0f75e)
* __Infrastructure__
	* Linkify changelog more + add missing PR references [`2a100db7`](http://github.com/PrismJS/prism/commit/2a100db7)
	* Set default indentation size ([#1516](http://github.com/PrismJS/prism/issues/1516)) [`e63d1597`](http://github.com/PrismJS/prism/commit/e63d1597)
	* Add travis repo badge to readme ([#1561](http://github.com/PrismJS/prism/issues/1561)) [`716923f4`](http://github.com/PrismJS/prism/commit/716923f4)
	* Update README.md ([#1553](http://github.com/PrismJS/prism/issues/1553)) [`6d1a2c61`](http://github.com/PrismJS/prism/commit/6d1a2c61)
	* Mention Prism Themes in README ([#1625](http://github.com/PrismJS/prism/issues/1625)) [`5db04656`](http://github.com/PrismJS/prism/commit/5db04656)
	* Fixed CHANGELOG.md ([#1707](http://github.com/PrismJS/prism/issues/1707)) [`b1f8a65d`](http://github.com/PrismJS/prism/commit/b1f8a65d) ([#1704](http://github.com/PrismJS/prism/issues/1704)) [`66d2104a`](http://github.com/PrismJS/prism/commit/66d2104a)
	* Change tested NodeJS versions ([#1651](http://github.com/PrismJS/prism/issues/1651)) [`6ec71e0b`](http://github.com/PrismJS/prism/commit/6ec71e0b)
	* Inline regex source with gulp ([#1537](http://github.com/PrismJS/prism/issues/1537)) [`e894fc89`](http://github.com/PrismJS/prism/commit/e894fc89) ([#1716](http://github.com/PrismJS/prism/issues/1716)) [`217a6ea4`](http://github.com/PrismJS/prism/commit/217a6ea4)
	* Improve gulp error messages with pump ([#1741](http://github.com/PrismJS/prism/issues/1741)) [`671f4ca0`](http://github.com/PrismJS/prism/commit/671f4ca0)
	* Update gulp to version 4.0.0 ([#1779](http://github.com/PrismJS/prism/issues/1779)) [`06627f6a`](http://github.com/PrismJS/prism/commit/06627f6a)
	* gulp: Refactoring ([#1780](http://github.com/PrismJS/prism/issues/1780)) [`6c9fe257`](http://github.com/PrismJS/prism/commit/6c9fe257)
	* npm: Updated all dependencies ([#1742](http://github.com/PrismJS/prism/issues/1742)) [`9d908d5a`](http://github.com/PrismJS/prism/commit/9d908d5a)
	* Tests: Pretty-printed token stream ([#1801](http://github.com/PrismJS/prism/issues/1801)) [`9ea6d600`](http://github.com/PrismJS/prism/commit/9ea6d600)
	* Refactored tests ([#1795](http://github.com/PrismJS/prism/issues/1795)) [`832a9643`](http://github.com/PrismJS/prism/commit/832a9643)
	* Added issue templates ([#1805](http://github.com/PrismJS/prism/issues/1805)) [`dedb475f`](http://github.com/PrismJS/prism/commit/dedb475f)
	* npm: Fixed `test` script ([#1809](http://github.com/PrismJS/prism/issues/1809)) [`bc649dfa`](http://github.com/PrismJS/prism/commit/bc649dfa)
	* Add command to generate CHANGELOG [`212666d3`](http://github.com/PrismJS/prism/commit/212666d3)
	* Name in composer.json set to lowercase ([#1824](http://github.com/PrismJS/prism/issues/1824)) [`4f78f1d6`](http://github.com/PrismJS/prism/commit/4f78f1d6)
	* Added alias tests ([#1832](http://github.com/PrismJS/prism/issues/1832)) [`5c1a6fb2`](http://github.com/PrismJS/prism/commit/5c1a6fb2)
	* Travis: Fail when changed files are detected ([#1819](http://github.com/PrismJS/prism/issues/1819)) [`66b44e3b`](http://github.com/PrismJS/prism/commit/66b44e3b)
	* Tests: Additional checks for Prism functions ([#1803](http://github.com/PrismJS/prism/issues/1803)) [`c3e74ea3`](http://github.com/PrismJS/prism/commit/c3e74ea3)
	* Adjusted .npmignore ([#1834](http://github.com/PrismJS/prism/issues/1834)) [`29a30c62`](http://github.com/PrismJS/prism/commit/29a30c62)
* __Website__
	* Add Python triple-quoted strings "known failure" ([#1449](http://github.com/PrismJS/prism/issues/1449)) [`334c7bca`](http://github.com/PrismJS/prism/commit/334c7bca)
	* Updated index.html to fix broken instructions ([#1462](http://github.com/PrismJS/prism/issues/1462)) [`7418dfdd`](http://github.com/PrismJS/prism/commit/7418dfdd)
	* Improve download page typography ([#1484](http://github.com/PrismJS/prism/issues/1484)) [`b1c2f4df`](http://github.com/PrismJS/prism/commit/b1c2f4df)
	* Fixed peer dependencies in download page ([#1491](http://github.com/PrismJS/prism/issues/1491)) [`9d15ff6e`](http://github.com/PrismJS/prism/commit/9d15ff6e)
	* Fixed empty link in extending ([#1507](http://github.com/PrismJS/prism/issues/1507)) [`74916d48`](http://github.com/PrismJS/prism/commit/74916d48)
	* Display language aliases ([#1626](http://github.com/PrismJS/prism/issues/1626)) [`654b527b`](http://github.com/PrismJS/prism/commit/654b527b)
	* Clean up Previewers' page ([#1630](http://github.com/PrismJS/prism/issues/1630)) [`b0d1823c`](http://github.com/PrismJS/prism/commit/b0d1823c)
	* Updated website table of contents styles ([#1681](http://github.com/PrismJS/prism/issues/1681)) [`efdd96c3`](http://github.com/PrismJS/prism/commit/efdd96c3)
	* Added new third-party tutorial for using Prism in Gutenberg ([#1701](http://github.com/PrismJS/prism/issues/1701)) [`ff9ccbe5`](http://github.com/PrismJS/prism/commit/ff9ccbe5)
	* Remove dead tutorial ([#1702](http://github.com/PrismJS/prism/issues/1702)) [`e2d3bc7e`](http://github.com/PrismJS/prism/commit/e2d3bc7e)
	* Fix downloads page fetching from GitHub([#1684](http://github.com/PrismJS/prism/issues/1684)) [`dbd3555e`](http://github.com/PrismJS/prism/commit/dbd3555e)
	* Remove parentheses from download page ([#1627](http://github.com/PrismJS/prism/issues/1627)) [`2ce0666d`](http://github.com/PrismJS/prism/commit/2ce0666d)
	* Line Numbers plugin instructions clarifications ([#1719](http://github.com/PrismJS/prism/issues/1719)) [`00f4f04f`](http://github.com/PrismJS/prism/commit/00f4f04f)
	* Fixed Toolbar plugin example ([#1726](http://github.com/PrismJS/prism/issues/1726)) [`5311ca32`](http://github.com/PrismJS/prism/commit/5311ca32)
	* Test page: Show tokens option ([#1757](http://github.com/PrismJS/prism/issues/1757)) [`729cb28b`](http://github.com/PrismJS/prism/commit/729cb28b)
	* Some encouragement for visitors of PrismJS.com to request new languages ([#1760](http://github.com/PrismJS/prism/issues/1760)) [`ea769e0b`](http://github.com/PrismJS/prism/commit/ea769e0b)
	* Docs: Added missing parameter ([#1774](http://github.com/PrismJS/prism/issues/1774)) [`18f2921d`](http://github.com/PrismJS/prism/commit/18f2921d)
	* More persistent test page ([#1529](http://github.com/PrismJS/prism/issues/1529)) [`3100fa31`](http://github.com/PrismJS/prism/commit/3100fa31)
	* Added scripts directory ([#1781](http://github.com/PrismJS/prism/issues/1781)) [`439ea1ee`](http://github.com/PrismJS/prism/commit/439ea1ee)
	* Fixed download page ([#1811](http://github.com/PrismJS/prism/issues/1811)) [`77c57446`](http://github.com/PrismJS/prism/commit/77c57446)

## 1.15.0 (2018-06-16)

### New components

* __Template Tookit 2__ ([#1418](http://github.com/PrismJS/prism/issues/1418)) [[`e063992`](http://github.com/PrismJS/prism/commit/e063992)]
* __XQuery__ ([#1411](http://github.com/PrismJS/prism/issues/1411)) [[`e326cb0`](http://github.com/PrismJS/prism/commit/e326cb0)]
* __TAP__ ([#1430](http://github.com/PrismJS/prism/issues/1430)) [[`8c2b71f`](http://github.com/PrismJS/prism/commit/8c2b71f)]

### Updated components

* __HTTP__
	* Absolute path is a valid request uri ([#1388](http://github.com/PrismJS/prism/issues/1388)) [[`f6e81cb`](http://github.com/PrismJS/prism/commit/f6e81cb)]
* __Kotlin__
	* Add keywords of Kotlin and modify it's number pattern. ([#1389](http://github.com/PrismJS/prism/issues/1389)) [[`1bf73b0`](http://github.com/PrismJS/prism/commit/1bf73b0)]
	* Add `typealias` keyword ([#1437](http://github.com/PrismJS/prism/issues/1437)) [[`a21fdee`](http://github.com/PrismJS/prism/commit/a21fdee)]
* __JavaScript__
	* Improve Regexp pattern [[`5b043cf`](http://github.com/PrismJS/prism/commit/5b043cf)]
	* Add support for one level of nesting inside template strings. Fix [#1397](http://github.com/PrismJS/prism/issues/1397) [[`db2d0eb`](http://github.com/PrismJS/prism/commit/db2d0eb)]
* __Elixir__
	* Elixir: Fix attributes consuming punctuation. Fix [#1392](http://github.com/PrismJS/prism/issues/1392) [[`dac0485`](http://github.com/PrismJS/prism/commit/dac0485)]
* __Bash__
	* Change reserved keyword reference ([#1396](http://github.com/PrismJS/prism/issues/1396)) [[`b94f01f`](http://github.com/PrismJS/prism/commit/b94f01f)]
* __PowerShell__
	* Allow for one level of nesting in expressions inside strings. Fix [#1407](http://github.com/PrismJS/prism/issues/1407) [[`9272d6f`](http://github.com/PrismJS/prism/commit/9272d6f)]
* __JSX__
	* Allow for two levels of nesting inside JSX tags. Fix [#1408](http://github.com/PrismJS/prism/issues/1408) [[`f1cd7c5`](http://github.com/PrismJS/prism/commit/f1cd7c5)]
	* Add support for fragments short syntax. Fix [#1421](http://github.com/PrismJS/prism/issues/1421) [[`38ce121`](http://github.com/PrismJS/prism/commit/38ce121)]
* __Pascal__
	* Add `objectpascal` as an alias to `pascal` ([#1426](http://github.com/PrismJS/prism/issues/1426)) [[`a0bfc84`](http://github.com/PrismJS/prism/commit/a0bfc84)]
* __Swift__
	* Fix Swift 'protocol' keyword ([#1440](http://github.com/PrismJS/prism/issues/1440)) [[`081e318`](http://github.com/PrismJS/prism/commit/081e318)]

### Updated plugins

* __File Highlight__
	* Fix issue causing the Download button to show up on every code blocks. [[`cd22499`](http://github.com/PrismJS/prism/commit/cd22499)]
	* Simplify lang regex on File Highlight plugin ([#1399](http://github.com/PrismJS/prism/issues/1399)) [[`7bc9a4a`](http://github.com/PrismJS/prism/commit/7bc9a4a)]
* __Show Language__
	* Don't process language if block language not set ([#1410](http://github.com/PrismJS/prism/issues/1410)) [[`c111869`](http://github.com/PrismJS/prism/commit/c111869)]
* __Autoloader__
	* ASP.NET should require C# [[`fa328bb`](http://github.com/PrismJS/prism/commit/fa328bb)]
* __Line Numbers__
	* Make line-numbers styles more specific ([#1434](http://github.com/PrismJS/prism/issues/1434), [#1435](http://github.com/PrismJS/prism/issues/1435)) [[`9ee4f54`](http://github.com/PrismJS/prism/commit/9ee4f54)]

### Updated themes

* Add .token.class-name to rest of themes ([#1360](http://github.com/PrismJS/prism/issues/1360)) [[`f356dfe`](http://github.com/PrismJS/prism/commit/f356dfe)]

### Other changes

* __Website__
	* Site now loads over HTTPS!
	* Use HTTPS / canonical URLs ([#1390](http://github.com/PrismJS/prism/issues/1390)) [[`95146c8`](http://github.com/PrismJS/prism/commit/95146c8)]
	* Added Angular tutorial link [[`c436a7c`](http://github.com/PrismJS/prism/commit/c436a7c)]
	* Use rel="icon" instead of rel="shortcut icon" ([#1398](http://github.com/PrismJS/prism/issues/1398)) [[`d95f8fb`](http://github.com/PrismJS/prism/commit/d95f8fb)]
	* Fix Download page not handling multiple dependencies when from Redownload URL [[`c2ff248`](http://github.com/PrismJS/prism/commit/c2ff248)]
	* Update documentation for node & webpack usage [[`1e99e96`](http://github.com/PrismJS/prism/commit/1e99e96)]
* Handle optional dependencies in `loadLanguages()` ([#1417](http://github.com/PrismJS/prism/issues/1417)) [[`84935ac`](http://github.com/PrismJS/prism/commit/84935ac)]
* Add Chinese translation [[`f2b1964`](http://github.com/PrismJS/prism/commit/f2b1964)]

## 1.14.0 (2018-04-11)

### New components
* __GEDCOM__ ([#1385](http://github.com/PrismJS/prism/issues/1385)) [[`6e0b20a`](http://github.com/PrismJS/prism/commit/6e0b20a)]
* __Lisp__ ([#1297](http://github.com/PrismJS/prism/issues/1297)) [[`46468f8`](http://github.com/PrismJS/prism/commit/46468f8)]
* __Markup Templating__ ([#1367](http://github.com/PrismJS/prism/issues/1367)) [[`5f9c078`](http://github.com/PrismJS/prism/commit/5f9c078)]
* __Soy__ ([#1387](http://github.com/PrismJS/prism/issues/1387)) [[`b4509bf`](http://github.com/PrismJS/prism/commit/b4509bf)]
* __Velocity__ ([#1378](http://github.com/PrismJS/prism/issues/1378)) [[`5a524f7`](http://github.com/PrismJS/prism/commit/5a524f7)]
* __Visual Basic__ ([#1382](http://github.com/PrismJS/prism/issues/1382)) [[`c673ec2`](http://github.com/PrismJS/prism/commit/c673ec2)]
* __WebAssembly__ ([#1386](http://github.com/PrismJS/prism/issues/1386)) [[`c28d8c5`](http://github.com/PrismJS/prism/commit/c28d8c5)]

### Updated components
* __Bash__:
	* Add curl to the list of common functions. Close [#1160](http://github.com/PrismJS/prism/issues/1160) [[`1bfc084`](http://github.com/PrismJS/prism/commit/1bfc084)]
* __C-like__:
	* Make single-line comments greedy. Fix [#1337](http://github.com/PrismJS/prism/issues/1337). Make sure [#1340](http://github.com/PrismJS/prism/issues/1340) stays fixed. [[`571f2c5`](http://github.com/PrismJS/prism/commit/571f2c5)]
* __C#__:
	* More generic class-name highlighting. Fix [#1365](http://github.com/PrismJS/prism/issues/1365) [[`a6837d2`](http://github.com/PrismJS/prism/commit/a6837d2)]
	* More specific class-name highlighting. Fix [#1371](http://github.com/PrismJS/prism/issues/1371) [[`0a95f69`](http://github.com/PrismJS/prism/commit/0a95f69)]
* __Eiffel__:
	* Fix verbatim strings. Fix [#1379](http://github.com/PrismJS/prism/issues/1379) [[`04df41b`](http://github.com/PrismJS/prism/commit/04df41b)]
* __Elixir__
	* Make regexps greedy, remove comment hacks. Update known failures and tests. [[`e93d61f`](http://github.com/PrismJS/prism/commit/e93d61f)]
* __ERB__:
	* Make highlighting work properly in NodeJS ([#1367](http://github.com/PrismJS/prism/issues/1367)) [[`5f9c078`](http://github.com/PrismJS/prism/commit/5f9c078)]
* __Fortran__:
	* Make single-line comments greedy. Update known failures and tests. [[`c083b78`](http://github.com/PrismJS/prism/commit/c083b78)]
* __Handlebars__:
	* Make highlighting work properly in NodeJS ([#1367](http://github.com/PrismJS/prism/issues/1367)) [[`5f9c078`](http://github.com/PrismJS/prism/commit/5f9c078)]
* __Java__:
	* Add support for generics. Fix [#1351](http://github.com/PrismJS/prism/issues/1351) [[`a5cf302`](http://github.com/PrismJS/prism/commit/a5cf302)]
* __JavaScript__:
	* Add support for constants. Fix [#1348](http://github.com/PrismJS/prism/issues/1348) [[`9084481`](http://github.com/PrismJS/prism/commit/9084481)]
	* Improve Regex matching [[`172d351`](http://github.com/PrismJS/prism/commit/172d351)]
* __JSX__:
	* Fix highlighting of empty objects. Fix [#1364](http://github.com/PrismJS/prism/issues/1364) [[`b26bbb8`](http://github.com/PrismJS/prism/commit/b26bbb8)]
* __Monkey__:
	* Make comments greedy. Update known failures and tests. [[`d7b2b43`](http://github.com/PrismJS/prism/commit/d7b2b43)]
* __PHP__:
	* Make highlighting work properly in NodeJS ([#1367](http://github.com/PrismJS/prism/issues/1367)) [[`5f9c078`](http://github.com/PrismJS/prism/commit/5f9c078)]
* __Puppet__:
	* Make heredoc, comments, regexps and strings greedy. Update known failures and tests. [[`0c139d1`](http://github.com/PrismJS/prism/commit/0c139d1)]
* __Q__:
	* Make comments greedy. Update known failures and tests. [[`a0f5081`](http://github.com/PrismJS/prism/commit/a0f5081)]
* __Ruby__:
	* Make multi-line comments greedy, remove single-line comment hack. Update known failures and tests. [[`b0e34fb`](http://github.com/PrismJS/prism/commit/b0e34fb)]
* __SQL__:
	* Add missing keywords. Fix [#1374](http://github.com/PrismJS/prism/issues/1374) [[`238b195`](http://github.com/PrismJS/prism/commit/238b195)]

### Updated plugins
* __Command Line__:
	* Command Line: Allow specifying output prefix using data-filter-output attribute. ([#856](http://github.com/PrismJS/prism/issues/856)) [[`094d546`](http://github.com/PrismJS/prism/commit/094d546)]
* __File Highlight__:
	* Add option to provide a download button, when used with the Toolbar plugin. Fix [#1030](http://github.com/PrismJS/prism/issues/1030) [[`9f22952`](http://github.com/PrismJS/prism/commit/9f22952)]

### Updated themes
* __Default__:
	* Reach AA contrast ratio level ([#1296](http://github.com/PrismJS/prism/issues/1296)) [[`8aea939`](http://github.com/PrismJS/prism/commit/8aea939)]

### Other changes
* Website: Remove broken third-party tutorials from homepage [[`0efd6e1`](http://github.com/PrismJS/prism/commit/0efd6e1)]
* Docs: Mention `loadLanguages()` function on homepage in the nodeJS section. Close [#972](http://github.com/PrismJS/prism/issues/972), close [#593](http://github.com/PrismJS/prism/issues/593) [[`4a14d20`](http://github.com/PrismJS/prism/commit/4a14d20)]
* Core: Greedy patterns should always be matched against the full string. Fix [#1355](http://github.com/PrismJS/prism/issues/1355) [[`294efaa`](http://github.com/PrismJS/prism/commit/294efaa)]
* Crystal: Update known failures. [[`e1d2d42`](http://github.com/PrismJS/prism/commit/e1d2d42)]
* D: Update known failures and tests. [[`13d9991`](http://github.com/PrismJS/prism/commit/13d9991)]
* Markdown: Update known failures. [[`5b6c76d`](http://github.com/PrismJS/prism/commit/5b6c76d)]
* Matlab: Update known failures. [[`259b6fc`](http://github.com/PrismJS/prism/commit/259b6fc)]
* Website: Remove non-existent anchor to failures. Reword on homepage to make is less misleading. [[`8c0911a`](http://github.com/PrismJS/prism/commit/8c0911a)]
* Website: Add link to Keep Markup plugin in FAQ [[`e8cb6d4`](http://github.com/PrismJS/prism/commit/e8cb6d4)]
* Test suite: Memory leak in vm.runInNewContext() seems fixed. Revert [[`9a4b6fa`](http://github.com/PrismJS/prism/commit/9a4b6fa)] to drastically improve tests execution time. [[`9bceece`](http://github.com/PrismJS/prism/commit/9bceece), [`7c7602b`](http://github.com/PrismJS/prism/commit/7c7602b)]
* Gulp: Don't minify `components/index.js` [[`689227b`](http://github.com/PrismJS/prism/commit/689227b)]
* Website: Fix theme selection on Download page, when theme is in query string or hash. [[`b4d3063`](http://github.com/PrismJS/prism/commit/b4d3063)]
* Update JSPM config to also include unminified components. Close [#995](http://github.com/PrismJS/prism/issues/995) [[`218f160`](http://github.com/PrismJS/prism/commit/218f160)]
* Core: Fix support for language alias containing dash `-` [[`659ea31`](http://github.com/PrismJS/prism/commit/659ea31)]

## 1.13.0 (2018-03-21)

### New components
* __ERB__ [[`e6213ac`](http://github.com/PrismJS/prism/commit/e6213ac)]
* __PL/SQL__ ([#1338](http://github.com/PrismJS/prism/issues/1338)) [[`3599e6a`](http://github.com/PrismJS/prism/commit/3599e6a)]

### Updated components
* __JSX__:
	* Add support for plain text inside tags ([#1357](http://github.com/PrismJS/prism/issues/1357)) [[`2b8321d`](http://github.com/PrismJS/prism/commit/2b8321d)]
* __Markup__:
	* Make tags greedy. Fix [#1356](http://github.com/PrismJS/prism/issues/1356) [[`af834be`](http://github.com/PrismJS/prism/commit/af834be)]
* __Powershell__:
	* Add lookbehind to fix function interpolation inside strings. Fix [#1361](http://github.com/PrismJS/prism/issues/1361) [[`d2c026e`](http://github.com/PrismJS/prism/commit/d2c026e)]
* __Rust__:
	* Improve char pattern so that lifetime annotations are matched better. Fix [#1353](http://github.com/PrismJS/prism/issues/1353) [[`efdccbf`](http://github.com/PrismJS/prism/commit/efdccbf)]

### Updated themes
* __Default__:
	* Add color for class names [[`8572474`](http://github.com/PrismJS/prism/commit/8572474)]
* __Coy__:
	* Inherit pre's height on code, so it does not break on Download page. [[`c6c7fd1`](http://github.com/PrismJS/prism/commit/c6c7fd1)]

### Other changes
* Website: Auto-generate example headers [[`c3ed5b5`](http://github.com/PrismJS/prism/commit/c3ed5b5)]
* Core: Allow cloning of circular structures. ([#1345](http://github.com/PrismJS/prism/issues/1345)) [[`f90d555`](http://github.com/PrismJS/prism/commit/f90d555)]
* Core: Generate components.js from components.json and make it exportable to nodeJS. ([#1354](http://github.com/PrismJS/prism/issues/1354)) [[`ba60df0`](http://github.com/PrismJS/prism/commit/ba60df0)]
* Website: Improve appearance of theme selector [[`0460cad`](http://github.com/PrismJS/prism/commit/0460cad)]
* Website: Check stored theme by default + link both theme selectors together. Close [#1038](http://github.com/PrismJS/prism/issues/1038) [[`212dd4e`](http://github.com/PrismJS/prism/commit/212dd4e)]
* Tests: Use the new components.js file directly [[`0e1a8b7`](http://github.com/PrismJS/prism/commit/0e1a8b7)]
* Update .npmignore Close [#1274](http://github.com/PrismJS/prism/issues/1274) [[`a52319a`](http://github.com/PrismJS/prism/commit/a52319a)]
* Add a loadLanguages() function for easy component loading on NodeJS ([#1359](http://github.com/PrismJS/prism/issues/1359)) [[`a5331a6`](http://github.com/PrismJS/prism/commit/a5331a6)]

## 1.12.2 (2018-03-08)

### Other changes
* Test against NodeJS 4, 6, 8 and 9 ([#1329](http://github.com/PrismJS/prism/issues/1329)) [[`97b7d0a`](http://github.com/PrismJS/prism/commit/97b7d0a)]
* Stop testing against NodeJS 0.10 and 0.12 [[`df01b1b`](http://github.com/PrismJS/prism/commit/df01b1b)]

## 1.12.1 (2018-03-08)

### Updated components
* __C-like__:
	* Revert [[`b98e5b9`](http://github.com/PrismJS/prism/commit/b98e5b9)] to fix [#1340](http://github.com/PrismJS/prism/issues/1340). Reopened [#1337](http://github.com/PrismJS/prism/issues/1337). [[`cebacdf`](http://github.com/PrismJS/prism/commit/cebacdf)]
* __JSX__:
	* Allow for one level of nested curly braces inside tag attribute value. Fix [#1335](http://github.com/PrismJS/prism/issues/1335) [[`05bf67d`](http://github.com/PrismJS/prism/commit/05bf67d)]
* __Ruby__:
	*  Ensure module syntax is not confused with symbols. Fix [#1336](http://github.com/PrismJS/prism/issues/1336) [[`31a2a69`](http://github.com/PrismJS/prism/commit/31a2a69)]

## 1.12.0 (2018-03-07)

### New components
* __ARFF__ ([#1327](http://github.com/PrismJS/prism/issues/1327)) [[`0bc98ac`](http://github.com/PrismJS/prism/commit/0bc98ac)]
* __Clojure__ ([#1311](http://github.com/PrismJS/prism/issues/1311)) [[`8b4d3bd`](http://github.com/PrismJS/prism/commit/8b4d3bd)]
* __Liquid__ ([#1326](http://github.com/PrismJS/prism/issues/1326)) [[`f0b2c9e`](http://github.com/PrismJS/prism/commit/f0b2c9e)]

### Updated components
* __Bash__:
	* Add shell as an alias ([#1321](http://github.com/PrismJS/prism/issues/1321)) [[`67e16a2`](http://github.com/PrismJS/prism/commit/67e16a2)]
	* Add support for quoted command substitution. Fix [#1287](http://github.com/PrismJS/prism/issues/1287) [[`63fc215`](http://github.com/PrismJS/prism/commit/63fc215)]
* __C#__:
	* Add "dotnet" alias. [[`405867c`](http://github.com/PrismJS/prism/commit/405867c)]
* __C-like__:
	* Change order of comment patterns and make multi-line one greedy. Fix [#1337](http://github.com/PrismJS/prism/issues/1337) [[`b98e5b9`](http://github.com/PrismJS/prism/commit/b98e5b9)]
* __NSIS__:
	* Add support for NSIS 3.03 ([#1288](http://github.com/PrismJS/prism/issues/1288)) [[`bd1e98b`](http://github.com/PrismJS/prism/commit/bd1e98b)]
	* Add missing NSIS commands ([#1289](http://github.com/PrismJS/prism/issues/1289)) [[`ad2948f`](http://github.com/PrismJS/prism/commit/ad2948f)]
* __PHP__:
	* Add support for string interpolation inside double-quoted strings. Fix [#1146](http://github.com/PrismJS/prism/issues/1146) [[`9f1f8d6`](http://github.com/PrismJS/prism/commit/9f1f8d6)]
	* Add support for Heredoc and Nowdoc strings [[`5d7223c`](http://github.com/PrismJS/prism/commit/5d7223c)]
	* Fix shell-comment failure now that strings are greedy [[`ad25d22`](http://github.com/PrismJS/prism/commit/ad25d22)]
* __PowerShell__:
	* Add support for two levels of nested brackets inside namespace pattern. Fixes [#1317](http://github.com/PrismJS/prism/issues/1317) [[`3bc3e9c`](http://github.com/PrismJS/prism/commit/3bc3e9c)]
* __Ruby__:
	* Add keywords "protected", "private" and "public" [[`4593837`](http://github.com/PrismJS/prism/commit/4593837)]
* __Rust__:
	* Add support for lifetime-annotation and => operator. Fix [#1339](http://github.com/PrismJS/prism/issues/1339) [[`926f6f8`](http://github.com/PrismJS/prism/commit/926f6f8)]
* __Scheme__:
	* Don't highlight first number of a list as a function. Fix [#1331](http://github.com/PrismJS/prism/issues/1331) [[`51bff80`](http://github.com/PrismJS/prism/commit/51bff80)]
* __SQL__:
	* Add missing keywords and functions, fix numbers [[`de29d4a`](http://github.com/PrismJS/prism/commit/de29d4a)]

### Updated plugins
* __Autolinker__:
	* Allow more chars in query string and hash to match more URLs. Fix [#1142](http://github.com/PrismJS/prism/issues/1142) [[`109bd6f`](http://github.com/PrismJS/prism/commit/109bd6f)]
* __Copy to Clipboard__:
	* Bump ClipboardJS to 2.0.0 and remove hack ([#1314](http://github.com/PrismJS/prism/issues/1314)) [[`e9f410e`](http://github.com/PrismJS/prism/commit/e9f410e)]
* __Toolbar__:
	* Prevent scrolling toolbar with content ([#1305](http://github.com/PrismJS/prism/issues/1305), [#1314](http://github.com/PrismJS/prism/issues/1314)) [[`84eeb89`](http://github.com/PrismJS/prism/commit/84eeb89)]
* __Unescaped Markup__:
	* Use msMatchesSelector for IE11 and below. Fix [#1302](http://github.com/PrismJS/prism/issues/1302) [[`c246c1a`](http://github.com/PrismJS/prism/commit/c246c1a)]
* __WebPlatform Docs__:
	* WebPlatform Docs plugin: Fix links. Fixes [#1290](http://github.com/PrismJS/prism/issues/1290) [[`7a9dbe0`](http://github.com/PrismJS/prism/commit/7a9dbe0)]

### Other changes
* Fix Autoloader's demo page [[`3dddac9`](http://github.com/PrismJS/prism/commit/3dddac9)]
* Download page: Use hash instead of query-string for redownload URL. Fix [#1263](http://github.com/PrismJS/prism/issues/1263) [[`b03c02a`](http://github.com/PrismJS/prism/commit/b03c02a)]
* Core: Don't thow an error if lookbehing is used without anything matching. [[`e0cd47f`](http://github.com/PrismJS/prism/commit/e0cd47f)]
* Docs: Fix link to the `<code>` element specification in HTML5 [[`a84263f`](http://github.com/PrismJS/prism/commit/a84263f)]
* Docs: Mention support for `lang-xxxx` class. Close [#1312](http://github.com/PrismJS/prism/issues/1312) [[`a9e76db`](http://github.com/PrismJS/prism/commit/a9e76db)]
* Docs: Add note on `async` parameter to clarify the requirement of using a single bundled file. Closes [#1249](http://github.com/PrismJS/prism/issues/1249) [[`eba0235`](http://github.com/PrismJS/prism/commit/eba0235)]

## 1.11.0 (2018-02-05)

### New components
* __Content-Security-Policy (CSP)__ ([#1275](http://github.com/PrismJS/prism/issues/1275)) [[`b08cae5`](http://github.com/PrismJS/prism/commit/b08cae5)]
* __HTTP Public-Key-Pins (HPKP)__ ([#1275](http://github.com/PrismJS/prism/issues/1275)) [[`b08cae5`](http://github.com/PrismJS/prism/commit/b08cae5)]
* __HTTP String-Transport-Security (HSTS)__ ([#1275](http://github.com/PrismJS/prism/issues/1275)) [[`b08cae5`](http://github.com/PrismJS/prism/commit/b08cae5)]
* __React TSX__ ([#1280](http://github.com/PrismJS/prism/issues/1280)) [[`fbe82b8`](http://github.com/PrismJS/prism/commit/fbe82b8)]

### Updated components
* __C++__:
	* Add C++ platform-independent types ([#1271](http://github.com/PrismJS/prism/issues/1271)) [[`3da238f`](http://github.com/PrismJS/prism/commit/3da238f)]
* __TypeScript__:
	* Improve typescript with builtins ([#1277](http://github.com/PrismJS/prism/issues/1277)) [[`5de1b1f`](http://github.com/PrismJS/prism/commit/5de1b1f)]

### Other changes
* Fix passing of non-enumerable Error properties from the child test runner ([#1276](http://github.com/PrismJS/prism/issues/1276)) [[`38df653`](http://github.com/PrismJS/prism/commit/38df653)]

## 1.10.0 (2018-01-17)

### New components
* __6502 Assembly__ ([#1245](http://github.com/PrismJS/prism/issues/1245)) [[`2ece18b`](http://github.com/PrismJS/prism/commit/2ece18b)]
* __Elm__ ([#1174](http://github.com/PrismJS/prism/issues/1174)) [[`d6da70e`](http://github.com/PrismJS/prism/commit/d6da70e)]
* __IchigoJam BASIC__ ([#1246](http://github.com/PrismJS/prism/issues/1246)) [[`cf840be`](http://github.com/PrismJS/prism/commit/cf840be)]
* __Io__ ([#1251](http://github.com/PrismJS/prism/issues/1251)) [[`84ed3ed`](http://github.com/PrismJS/prism/commit/84ed3ed)]

### Updated components
* __BASIC__:
	* Make strings greedy [[`60114d0`](http://github.com/PrismJS/prism/commit/60114d0)]
* __C++__:
	* Add C++11 raw string feature ([#1254](http://github.com/PrismJS/prism/issues/1254)) [[`71595be`](http://github.com/PrismJS/prism/commit/71595be)]

### Updated plugins
* __Autoloader__:
	* Add support for `data-autoloader-path` ([#1242](http://github.com/PrismJS/prism/issues/1242)) [[`39360d6`](http://github.com/PrismJS/prism/commit/39360d6)]
* __Previewers__:
	* New plugin combining previous plugins Previewer: Base, Previewer: Angle, Previewer: Color, Previewer: Easing, Previewer: Gradient and Previewer: Time. ([#1244](http://github.com/PrismJS/prism/issues/1244)) [[`28e4b4c`](http://github.com/PrismJS/prism/commit/28e4b4c)]
* __Unescaped Markup__:
	* Make it work with any language ([#1265](http://github.com/PrismJS/prism/issues/1265)) [[`7bcdae7`](http://github.com/PrismJS/prism/commit/7bcdae7)]

### Other changes
* Add attribute `style` in `package.json` ([#1256](http://github.com/PrismJS/prism/issues/1256)) [[`a9b6785`](http://github.com/PrismJS/prism/commit/a9b6785)]

## 1.9.0 (2017-12-06)

### New components
* __Flow__ [[`d27b70d`](http://github.com/PrismJS/prism/commit/d27b70d)]

### Updated components
* __CSS__:
	* Unicode characters in CSS properties ([#1227](http://github.com/PrismJS/prism/issues/1227)) [[`f234ea4`](http://github.com/PrismJS/prism/commit/f234ea4)]
* __JSX__:
	* JSX: Improve highlighting support. Fix [#1235](http://github.com/PrismJS/prism/issues/1235) and [#1236](http://github.com/PrismJS/prism/issues/1236) [[`f41c5cd`](http://github.com/PrismJS/prism/commit/f41c5cd)]
* __Markup__:
	* Make CSS and JS inclusions in Markup greedy. Fix [#1240](http://github.com/PrismJS/prism/issues/1240) [[`7dc1e45`](http://github.com/PrismJS/prism/commit/7dc1e45)]
* __PHP__:
	* Add support for multi-line strings. Fix [#1233](http://github.com/PrismJS/prism/issues/1233) [[`9a542a0`](http://github.com/PrismJS/prism/commit/9a542a0)]

### Updated plugins
* __Copy to clipboard__:
	* Fix test for native Clipboard. Fix [#1241](http://github.com/PrismJS/prism/issues/1241) [[`e7b5e82`](http://github.com/PrismJS/prism/commit/e7b5e82)]
	* Copy to clipboard: Update to v1.7.1. Fix [#1220](http://github.com/PrismJS/prism/issues/1220) [[`a1b85e3`](http://github.com/PrismJS/prism/commit/a1b85e3), [`af50e44`](http://github.com/PrismJS/prism/commit/af50e44)]
* __Line highlight__:
	* Fixes to compatibility of line number and line higlight plugins ([#1194](http://github.com/PrismJS/prism/issues/1194)) [[`e63058f`](http://github.com/PrismJS/prism/commit/e63058f), [`3842a91`](http://github.com/PrismJS/prism/commit/3842a91)]
* __Unescaped Markup__:
	* Fix ambiguity in documentation by improving examples. Fix [#1197](http://github.com/PrismJS/prism/issues/1197) [[`924784a`](http://github.com/PrismJS/prism/commit/924784a)]

### Other changes
* Allow any element being root instead of document. ([#1230](http://github.com/PrismJS/prism/issues/1230)) [[`69f2e2c`](http://github.com/PrismJS/prism/commit/69f2e2c), [`6e50d44`](http://github.com/PrismJS/prism/commit/6e50d44)]
* Coy Theme: The 'height' element makes code blocks the height of the browser canvas. ([#1224](http://github.com/PrismJS/prism/issues/1224)) [[`ac219d7`](http://github.com/PrismJS/prism/commit/ac219d7)]
* Download page: Fix implicitly declared variable [[`f986551`](http://github.com/PrismJS/prism/commit/f986551)]
* Download page: Add version number at the beginning of the generated files. Fix [#788](http://github.com/PrismJS/prism/issues/788) [[`928790d`](http://github.com/PrismJS/prism/commit/928790d)]

## 1.8.4 (2017-11-05)

### Updated components

* __ABAP__:
	* Regexp optimisation [[`e7b411e`](http://github.com/PrismJS/prism/commit/e7b411e)]
* __ActionScript__:
	* Fix XML regex + optimise [[`75d00d7`](http://github.com/PrismJS/prism/commit/75d00d7)]
* __Ada__:
	* Regexp simplification [[`e881fe3`](http://github.com/PrismJS/prism/commit/e881fe3)]
* __Apacheconf__:
	* Regexp optimisation [[`a065e61`](http://github.com/PrismJS/prism/commit/a065e61)]
* __APL__:
	* Regexp simplification [[`33297c4`](http://github.com/PrismJS/prism/commit/33297c4)]
* __AppleScript__:
	* Regexp optimisation [[`d879f36`](http://github.com/PrismJS/prism/commit/d879f36)]
* __Arduino__:
	* Don't use captures if not needed [[`16b338f`](http://github.com/PrismJS/prism/commit/16b338f)]
* __ASP.NET__:
	* Regexp optimisation [[`438926c`](http://github.com/PrismJS/prism/commit/438926c)]
* __AutoHotkey__:
	* Regexp simplification + don't use captures if not needed [[`5edfd2f`](http://github.com/PrismJS/prism/commit/5edfd2f)]
* __Bash__:
	* Regexp optimisation and simplification [[`75b9b29`](http://github.com/PrismJS/prism/commit/75b9b29)]
* __Bro__:
	* Regexp simplification + don't use captures if not needed [[`d4b9003`](http://github.com/PrismJS/prism/commit/d4b9003)]
* __C__:
	* Regexp optimisation + don't use captures if not needed [[`f61d487`](http://github.com/PrismJS/prism/commit/f61d487)]
* __C++__:
	* Fix operator regexp + regexp simplification + don't use captures if not needed [[`ffeb26e`](http://github.com/PrismJS/prism/commit/ffeb26e)]
* __C#__:
	* Remove duplicates in keywords + regexp optimisation + don't use captures if not needed [[`d28d178`](http://github.com/PrismJS/prism/commit/d28d178)]
* __C-like__:
	* Regexp simplification + don't use captures if not needed [[`918e0ff`](http://github.com/PrismJS/prism/commit/918e0ff)]
* __CoffeeScript__:
	* Regexp optimisation + don't use captures if not needed [[`5895978`](http://github.com/PrismJS/prism/commit/5895978)]
* __Crystal__:
	* Remove trailing comma [[`16979a3`](http://github.com/PrismJS/prism/commit/16979a3)]
* __CSS__:
	* Regexp simplification + don't use captures if not needed + handle multi-line style attributes [[`43d9f36`](http://github.com/PrismJS/prism/commit/43d9f36)]
* __CSS Extras__:
	* Regexp simplification [[`134ed70`](http://github.com/PrismJS/prism/commit/134ed70)]
* __D__:
	* Regexp optimisation [[`fbe39c9`](http://github.com/PrismJS/prism/commit/fbe39c9)]
* __Dart__:
	* Regexp optimisation [[`f24e919`](http://github.com/PrismJS/prism/commit/f24e919)]
* __Django__:
	* Regexp optimisation [[`a95c51d`](http://github.com/PrismJS/prism/commit/a95c51d)]
* __Docker__:
	* Regexp optimisation [[`27f99ff`](http://github.com/PrismJS/prism/commit/27f99ff)]
* __Eiffel__:
	* Regexp optimisation [[`b7cdea2`](http://github.com/PrismJS/prism/commit/b7cdea2)]
* __Elixir__:
	* Regexp optimisation + uniform behavior between ~r and ~s [[`5d12e80`](http://github.com/PrismJS/prism/commit/5d12e80)]
* __Erlang__:
	* Regexp optimisation [[`7547f83`](http://github.com/PrismJS/prism/commit/7547f83)]
* __F#__:
	* Regexp optimisation + don't use captures if not needed [[`7753fc4`](http://github.com/PrismJS/prism/commit/7753fc4)]
* __Gherkin__:
	* Regexp optimisation + don't use captures if not needed + added explanation comment on table-body regexp [[`f26197a`](http://github.com/PrismJS/prism/commit/f26197a)]
* __Git__:
	* Regexp optimisation [[`b9483b9`](http://github.com/PrismJS/prism/commit/b9483b9)]
* __GLSL__:
	* Regexp optimisation [[`e66d21b`](http://github.com/PrismJS/prism/commit/e66d21b)]
* __Go__:
	* Regexp optimisation + don't use captures if not needed [[`88caabb`](http://github.com/PrismJS/prism/commit/88caabb)]
* __GraphQL__:
	* Regexp optimisation and simplification [[`2474f06`](http://github.com/PrismJS/prism/commit/2474f06)]
* __Groovy__:
	* Regexp optimisation + don't use captures if not needed [[`e74e00c`](http://github.com/PrismJS/prism/commit/e74e00c)]
* __Haml__:
	* Regexp optimisation + don't use captures if not needed + fix typo in comment [[`23e3b43`](http://github.com/PrismJS/prism/commit/23e3b43)]
* __Handlebars__:
	* Regexp optimisation + don't use captures if not needed [[`09dbfce`](http://github.com/PrismJS/prism/commit/09dbfce)]
* __Haskell__:
	* Regexp simplification + don't use captures if not needed [[`f11390a`](http://github.com/PrismJS/prism/commit/f11390a)]
* __HTTP__:
	* Regexp simplification + don't use captures if not needed [[`37ef24e`](http://github.com/PrismJS/prism/commit/37ef24e)]
* __Icon__:
	* Regexp optimisation [[`9cf64a0`](http://github.com/PrismJS/prism/commit/9cf64a0)]
* __J__:
	* Regexp simplification [[`de15150`](http://github.com/PrismJS/prism/commit/de15150)]
* __Java__:
	* Don't use captures if not needed [[`96b35c8`](http://github.com/PrismJS/prism/commit/96b35c8)]
* __JavaScript__:
	* Regexp optimisation + don't use captures if not needed [[`93d4002`](http://github.com/PrismJS/prism/commit/93d4002)]
* __Jolie__:
	* Regexp optimisation + don't use captures if not needed + remove duplicates in keywords [[`a491f9e`](http://github.com/PrismJS/prism/commit/a491f9e)]
* __JSON__:
	* Make strings greedy, remove negative look-ahead for ":". Fix [#1204](http://github.com/PrismJS/prism/issues/1204) [[`98acd2d`](http://github.com/PrismJS/prism/commit/98acd2d)]
	* Regexp optimisation + don't use captures if not needed [[`8fc1b03`](http://github.com/PrismJS/prism/commit/8fc1b03)]
* __JSX__:
	* Regexp optimisation + handle spread operator as a whole [[`28de4e2`](http://github.com/PrismJS/prism/commit/28de4e2)]
* __Julia__:
	* Regexp optimisation and simplification [[`12684c0`](http://github.com/PrismJS/prism/commit/12684c0)]
* __Keyman__:
	* Regexp optimisation + don't use captures if not needed [[`9726087`](http://github.com/PrismJS/prism/commit/9726087)]
* __Kotlin__:
	* Regexp simplification [[`12ff8dc`](http://github.com/PrismJS/prism/commit/12ff8dc)]
* __LaTeX__:
	* Regexp optimisation and simplification [[`aa426b0`](http://github.com/PrismJS/prism/commit/aa426b0)]
* __LiveScript__:
	* Make interpolated strings greedy + fix variable and identifier regexps [[`c581049`](http://github.com/PrismJS/prism/commit/c581049)]
* __LOLCODE__:
	* Don't use captures if not needed [[`52903af`](http://github.com/PrismJS/prism/commit/52903af)]
* __Makefile__:
	* Regexp optimisation [[`20ae2e5`](http://github.com/PrismJS/prism/commit/20ae2e5)]
* __Markdown__:
	* Don't use captures if not needed [[`f489a1e`](http://github.com/PrismJS/prism/commit/f489a1e)]
* __Markup__:
	* Regexp optimisation + fix punctuation inside attr-value [[`ea380c6`](http://github.com/PrismJS/prism/commit/ea380c6)]
* __MATLAB__:
	* Make strings greedy + handle line feeds better [[`4cd4f01`](http://github.com/PrismJS/prism/commit/4cd4f01)]
* __Monkey__:
	* Don't use captures if not needed [[`7f47140`](http://github.com/PrismJS/prism/commit/7f47140)]
* __N4JS__:
	* Don't use captures if not needed [[`2d3f9df`](http://github.com/PrismJS/prism/commit/2d3f9df)]
* __NASM__:
	* Regexp optimisation and simplification + don't use captures if not needed [[`9937428`](http://github.com/PrismJS/prism/commit/9937428)]
* __nginx__:
	* Remove trailing comma + remove duplicates in keywords [[`c6e7195`](http://github.com/PrismJS/prism/commit/c6e7195)]
* __NSIS__:
	* Regexp optimisation + don't use captures if not needed [[`beeb107`](http://github.com/PrismJS/prism/commit/beeb107)]
* __Objective-C__:
	* Don't use captures if not needed [[`9be0f88`](http://github.com/PrismJS/prism/commit/9be0f88)]
* __OCaml__:
	* Regexp simplification [[`5f5f38c`](http://github.com/PrismJS/prism/commit/5f5f38c)]
* __OpenCL__:
	* Don't use captures if not needed [[`5e70f1d`](http://github.com/PrismJS/prism/commit/5e70f1d)]
* __Oz__:
	* Fix atom regexp [[`9320e92`](http://github.com/PrismJS/prism/commit/9320e92)]
* __PARI/GP__:
	* Regexp optimisation [[`2c7b59b`](http://github.com/PrismJS/prism/commit/2c7b59b)]
* __Parser__:
	* Regexp simplification [[`569d511`](http://github.com/PrismJS/prism/commit/569d511)]
* __Perl__:
	* Regexp optimisation and simplification + don't use captures if not needed [[`0fe4cf6`](http://github.com/PrismJS/prism/commit/0fe4cf6)]
* __PHP__:
	* Don't use captures if not needed Golmote [[`5235f18`](http://github.com/PrismJS/prism/commit/5235f18)]
* __PHP Extras__:
	* Add word boundary after global keywords + don't use captures if not needed [[`9049a2a`](http://github.com/PrismJS/prism/commit/9049a2a)]
* __PowerShell__:
	* Regexp optimisation + don't use captures if not needed [[`0d05957`](http://github.com/PrismJS/prism/commit/0d05957)]
* __Processing__:
	* Regexp simplification [[`8110d38`](http://github.com/PrismJS/prism/commit/8110d38)]
* __.properties__:
	* Regexp optimisation [[`678b621`](http://github.com/PrismJS/prism/commit/678b621)]
* __Protocol Buffers__:
	* Don't use captures if not needed [[`3e256d8`](http://github.com/PrismJS/prism/commit/3e256d8)]
* __Pug__:
	* Don't use captures if not needed [[`76dc925`](http://github.com/PrismJS/prism/commit/76dc925)]
* __Pure__:
	* Make inline-lang greedy [[`92318b0`](http://github.com/PrismJS/prism/commit/92318b0)]
* __Python__:
	* Add Python builtin function highlighting ([#1205](http://github.com/PrismJS/prism/issues/1205)) [[`2169c99`](http://github.com/PrismJS/prism/commit/2169c99)]
	* Python: Add highlighting to functions with space between name and parentheses ([#1207](http://github.com/PrismJS/prism/issues/1207)) [[`3badd8a`](http://github.com/PrismJS/prism/commit/3badd8a)]
	* Make triple-quoted strings greedy + regexp optimisation and simplification [[`f09f9f5`](http://github.com/PrismJS/prism/commit/f09f9f5)]
* __Qore__:
	* Regexp simplification [[`69459f0`](http://github.com/PrismJS/prism/commit/69459f0)]
* __R__:
	* Regexp optimisation [[`06a9da4`](http://github.com/PrismJS/prism/commit/06a9da4)]
* __Reason__:
	* Regexp optimisation + don't use capture if not needed [[`19d79b4`](http://github.com/PrismJS/prism/commit/19d79b4)]
* __Ren'py__:
	* Make strings greedy + don't use captures if not needed [[`91d84d9`](http://github.com/PrismJS/prism/commit/91d84d9)]
* __reST__:
	* Regexp simplification + don't use captures if not needed [[`1a8b3e9`](http://github.com/PrismJS/prism/commit/1a8b3e9)]
* __Rip__:
	* Regexp optimisation [[`d7f0ee8`](http://github.com/PrismJS/prism/commit/d7f0ee8)]
* __Ruby__:
	* Regexp optimisation and simplification + don't use captures if not needed [[`4902ed4`](http://github.com/PrismJS/prism/commit/4902ed4)]
* __Rust__:
	* Regexp optimisation and simplification + don't use captures if not needed [[`cc9d874`](http://github.com/PrismJS/prism/commit/cc9d874)]
* __Sass__:
	* Regexp simplification Golmote [[`165d957`](http://github.com/PrismJS/prism/commit/165d957)]
* __Scala__:
	* Regexp optimisation Golmote [[`5f50c12`](http://github.com/PrismJS/prism/commit/5f50c12)]
* __Scheme__:
	* Regexp optimisation [[`bd19b04`](http://github.com/PrismJS/prism/commit/bd19b04)]
* __SCSS__:
	* Regexp simplification [[`c60b7d4`](http://github.com/PrismJS/prism/commit/c60b7d4)]
* __Smalltalk__:
	* Regexp simplification [[`41a2c76`](http://github.com/PrismJS/prism/commit/41a2c76)]
* __Smarty__:
	* Regexp optimisation and simplification [[`e169be9`](http://github.com/PrismJS/prism/commit/e169be9)]
* __SQL__:
	* Regexp optimisation [[`a6244a4`](http://github.com/PrismJS/prism/commit/a6244a4)]
* __Stylus__:
	* Regexp optimisation [[`df9506c`](http://github.com/PrismJS/prism/commit/df9506c)]
* __Swift__:
	* Don't use captures if not needed [[`a2d737a`](http://github.com/PrismJS/prism/commit/a2d737a)]
* __Tcl__:
	* Regexp simplification + don't use captures if not needed [[`f0b8a33`](http://github.com/PrismJS/prism/commit/f0b8a33)]
* __Textile__:
	* Regexp optimisation + don't use captures if not needed [[`08139ad`](http://github.com/PrismJS/prism/commit/08139ad)]
* __Twig__:
	* Regexp optimisation and simplification + don't use captures if not needed [[`0b10fd0`](http://github.com/PrismJS/prism/commit/0b10fd0)]
* __TypeScript__:
	* Don't use captures if not needed [[`e296caf`](http://github.com/PrismJS/prism/commit/e296caf)]
* __Verilog__:
	* Regexp simplification [[`1b24b34`](http://github.com/PrismJS/prism/commit/1b24b34)]
* __VHDL__:
	* Regexp optimisation and simplification [[`7af36df`](http://github.com/PrismJS/prism/commit/7af36df)]
* __vim__:
	* Remove duplicates in keywords [[`700505e`](http://github.com/PrismJS/prism/commit/700505e)]
* __Wiki markup__:
	* Fix escaping consistency [[`1fd690d`](http://github.com/PrismJS/prism/commit/1fd690d)]
* __YAML__:
	* Regexp optimisation + don't use captures if not needed [[`1fd690d`](http://github.com/PrismJS/prism/commit/1fd690d)]

### Other changes
* Remove comments spellcheck for AMP validation ([#1106](http://github.com/PrismJS/prism/issues/1106)) [[`de996d7`](http://github.com/PrismJS/prism/commit/de996d7)]
* Prevent error from throwing when element does not have a parentNode in highlightElement. [[`c33be19`](http://github.com/PrismJS/prism/commit/c33be19)]
* Provide a way to load Prism from inside a Worker without listening to messages. ([#1188](http://github.com/PrismJS/prism/issues/1188)) [[`d09982d`](http://github.com/PrismJS/prism/commit/d09982d)]

## 1.8.3 (2017-10-19)

### Other changes

* Fix inclusion tests for Pug [[`955c2ab`](http://github.com/PrismJS/prism/commit/955c2ab)]

## 1.8.2 (2017-10-19)

### Updated components
* __Jade__:
	* Jade has been renamed to __Pug__ ([#1201](http://github.com/PrismJS/prism/issues/1201)) [[`bcfef7c`](http://github.com/PrismJS/prism/commit/bcfef7c)]
* __JavaScript__:
	* Better highlighting of functions ([#1190](http://github.com/PrismJS/prism/issues/1190)) [[`8ee2cd3`](http://github.com/PrismJS/prism/commit/8ee2cd3)]

### Update plugins
* __Copy to clipboard__:
	* Fix error occurring when using in Chrome 61+ ([#1206](http://github.com/PrismJS/prism/issues/1206)) [[`b41d571`](http://github.com/PrismJS/prism/commit/b41d571)]
* __Show invisibles__:
	* Prevent error when using with Autoloader plugin ([#1195](http://github.com/PrismJS/prism/issues/1195)) [[`ed8bdb5`](http://github.com/PrismJS/prism/commit/ed8bdb5)]

## 1.8.1 (2017-09-16)

### Other changes

* Add Arduino to components.js [[`290a3c6`](http://github.com/PrismJS/prism/commit/290a3c6)]

## 1.8.0 (2017-09-16)

### New components

* __Arduino__ ([#1184](http://github.com/PrismJS/prism/issues/1184)) [[`edf2454`](http://github.com/PrismJS/prism/commit/edf2454)]
* __OpenCL__ ([#1175](http://github.com/PrismJS/prism/issues/1175)) [[`131e8fa`](http://github.com/PrismJS/prism/commit/131e8fa)]

### Updated plugins

* __Autolinker__:
	* Silently catch any error thrown by decodeURIComponent. Fixes [#1186](http://github.com/PrismJS/prism/issues/1186) [[`2e43fcf`](http://github.com/PrismJS/prism/commit/2e43fcf)]

## 1.7.0 (2017-09-09)

### New components

* __Django/Jinja2__ ([#1085](http://github.com/PrismJS/prism/issues/1085)) [[`345b1b2`](http://github.com/PrismJS/prism/commit/345b1b2)]
* __N4JS__ ([#1141](http://github.com/PrismJS/prism/issues/1141)) [[`eaa8ebb`](http://github.com/PrismJS/prism/commit/eaa8ebb)]
* __Ren'py__ ([#658](http://github.com/PrismJS/prism/issues/658)) [[`7ab4013`](http://github.com/PrismJS/prism/commit/7ab4013)]
* __VB.Net__ ([#1122](http://github.com/PrismJS/prism/issues/1122)) [[`5400651`](http://github.com/PrismJS/prism/commit/5400651)]

### Updated components

* __APL__:
	* Add left shoe underbar and right shoe underbar ([#1072](http://github.com/PrismJS/prism/issues/1072)) [[`12238c5`](http://github.com/PrismJS/prism/commit/12238c5)]
	* Update prism-apl.js ([#1126](http://github.com/PrismJS/prism/issues/1126)) [[`a5f3cdb`](http://github.com/PrismJS/prism/commit/a5f3cdb)]
* __C__:
	* Add more keywords and constants for C. ([#1029](http://github.com/PrismJS/prism/issues/1029)) [[`43a388e`](http://github.com/PrismJS/prism/commit/43a388e)]
* __C#__:
	* Fix wrong highlighting when three slashes appear inside string. Fix [#1091](http://github.com/PrismJS/prism/issues/1091) [[`dfb6f17`](http://github.com/PrismJS/prism/commit/dfb6f17)]
* __C-like__:
	* Add support for unclosed block comments. Close [#828](http://github.com/PrismJS/prism/issues/828) [[`3426ed1`](http://github.com/PrismJS/prism/commit/3426ed1)]
* __Crystal__:
	* Update Crystal keywords ([#1092](http://github.com/PrismJS/prism/issues/1092)) [[`125bff1`](http://github.com/PrismJS/prism/commit/125bff1)]
* __CSS Extras__:
	* Support CSS #RRGGBBAA ([#1139](http://github.com/PrismJS/prism/issues/1139)) [[`07a6806`](http://github.com/PrismJS/prism/commit/07a6806)]
* __Docker__:
	* Add dockerfile alias for docker language ([#1164](http://github.com/PrismJS/prism/issues/1164)) [[`601c47f`](http://github.com/PrismJS/prism/commit/601c47f)]
	* Update the list of keywords for dockerfiles ([#1180](http://github.com/PrismJS/prism/issues/1180)) [[`f0d73e0`](http://github.com/PrismJS/prism/commit/f0d73e0)]
* __Eiffel__:
	* Add class-name highlighting for Eiffel ([#471](http://github.com/PrismJS/prism/issues/471)) [[`cd03587`](http://github.com/PrismJS/prism/commit/cd03587)]
* __Handlebars__:
	* Check for possible pre-existing marker strings in Handlebars [[`7a1a404`](http://github.com/PrismJS/prism/commit/7a1a404)]
* __JavaScript__:
	* Properly match every operator as a whole token. Fix [#1133](http://github.com/PrismJS/prism/issues/1133) [[`9f649fb`](http://github.com/PrismJS/prism/commit/9f649fb)]
	* Allows uppercase prefixes in JS number literals ([#1151](http://github.com/PrismJS/prism/issues/1151)) [[`d4ee904`](http://github.com/PrismJS/prism/commit/d4ee904)]
	* Reduced backtracking in regex pattern. Fix [#1159](http://github.com/PrismJS/prism/issues/1159) [[`ac09e97`](http://github.com/PrismJS/prism/commit/ac09e97)]
* __JSON__:
	* Fix property and string patterns performance. Fix [#1080](http://github.com/PrismJS/prism/issues/1080) [[`0ca1353`](http://github.com/PrismJS/prism/commit/0ca1353)]
* __JSX__:
	* JSX spread operator break. Fixes [#1061](http://github.com/PrismJS/prism/issues/1061) ([#1094](http://github.com/PrismJS/prism/issues/1094)) [[`561bceb`](http://github.com/PrismJS/prism/commit/561bceb)]
	* Fix highlighting of attributes containing spaces [[`867ea42`](http://github.com/PrismJS/prism/commit/867ea42)]
	* Improved performance for tags (when not matching) Fix [#1152](http://github.com/PrismJS/prism/issues/1152) [[`b0fe103`](http://github.com/PrismJS/prism/commit/b0fe103)]
* __LOLCODE__:
	* Make strings greedy Golmote [[`1a5e7a4`](http://github.com/PrismJS/prism/commit/1a5e7a4)]
* __Markup__:
	* Support HTML entities in attribute values ([#1143](http://github.com/PrismJS/prism/issues/1143)) [[`1d5047d`](http://github.com/PrismJS/prism/commit/1d5047d)]
* __NSIS__:
	* Update patterns ([#1033](http://github.com/PrismJS/prism/issues/1033)) [[`01a59d8`](http://github.com/PrismJS/prism/commit/01a59d8)]
	* Add support for NSIS 3.02 ([#1169](http://github.com/PrismJS/prism/issues/1169)) [[`393b5f7`](http://github.com/PrismJS/prism/commit/393b5f7)]
* __PHP__:
	* Fix the PHP language ([#1100](http://github.com/PrismJS/prism/issues/1100)) [[`1453fa7`](http://github.com/PrismJS/prism/commit/1453fa7)]
	* Check for possible pre-existing marker strings in PHP [[`36bc560`](http://github.com/PrismJS/prism/commit/36bc560)]
* __Ruby__:
	* Fix slash regex performance. Fix [#1083](http://github.com/PrismJS/prism/issues/1083) [[`a708730`](http://github.com/PrismJS/prism/commit/a708730)]
	* Add support for =begin =end comments. Manual merge of [#1121](http://github.com/PrismJS/prism/issues/1121). [[`62cdaf8`](http://github.com/PrismJS/prism/commit/62cdaf8)]
* __Smarty__:
	* Check for possible pre-existing marker strings in Smarty [[`5df26e2`](http://github.com/PrismJS/prism/commit/5df26e2)]
* __TypeScript__:
	* Update typescript keywords ([#1064](http://github.com/PrismJS/prism/issues/1064)) [[`52020a0`](http://github.com/PrismJS/prism/commit/52020a0)]
	* Chmod -x prism-typescript component ([#1145](http://github.com/PrismJS/prism/issues/1145)) [[`afe0542`](http://github.com/PrismJS/prism/commit/afe0542)]
* __YAML__:
	* Make strings greedy (partial fix for [#1075](http://github.com/PrismJS/prism/issues/1075)) [[`565a2cc`](http://github.com/PrismJS/prism/commit/565a2cc)]

### Updated plugins

* __Autolinker__:
	* Fixed an rendering issue for encoded urls ([#1173](http://github.com/PrismJS/prism/issues/1173)) [[`abc007f`](http://github.com/PrismJS/prism/commit/abc007f)]
* __Custom Class__:
	* Add missing noCSS property for the Custom Class plugin [[`ba64f8d`](http://github.com/PrismJS/prism/commit/ba64f8d)]
	* Added a default for classMap. Fixes [#1137](http://github.com/PrismJS/prism/issues/1137). ([#1157](http://github.com/PrismJS/prism/issues/1157)) [[`5400af9`](http://github.com/PrismJS/prism/commit/5400af9)]
* __Keep Markup__:
	* Store highlightedCode after reinserting markup. Fix [#1127](http://github.com/PrismJS/prism/issues/1127) [[`6df2ceb`](http://github.com/PrismJS/prism/commit/6df2ceb)]
* __Line Highlight__:
	* Cleanup left-over line-highlight tags before other plugins run [[`79b723d`](http://github.com/PrismJS/prism/commit/79b723d)]
	* Avoid conflict between line-highlight and other plugins [[`224fdb8`](http://github.com/PrismJS/prism/commit/224fdb8)]
* __Line Numbers__:
	* Support soft wrap for line numbers plugin ([#584](http://github.com/PrismJS/prism/issues/584)) [[`849f1d6`](http://github.com/PrismJS/prism/commit/849f1d6)]
	* Plugins fixes (unescaped-markup, line-numbers) ([#1012](http://github.com/PrismJS/prism/issues/1012)) [[`3fb7cf8`](http://github.com/PrismJS/prism/commit/3fb7cf8)]
* __Normalize Whitespace__:
	* Add Node.js support for the normalize-whitespace plugin [[`6c7dae2`](http://github.com/PrismJS/prism/commit/6c7dae2)]
* __Unescaped Markup__:
	* Plugins fixes (unescaped-markup, line-numbers) ([#1012](http://github.com/PrismJS/prism/issues/1012)) [[`3fb7cf8`](http://github.com/PrismJS/prism/commit/3fb7cf8)]

### Updated themes
* __Coy__:
	* Scroll 'Coy' background with contents ([#1163](http://github.com/PrismJS/prism/issues/1163)) [[`310990b`](http://github.com/PrismJS/prism/commit/310990b)]

### Other changes

* Initial implementation of manual highlighting ([#1087](http://github.com/PrismJS/prism/issues/1087)) [[`bafc4cb`](http://github.com/PrismJS/prism/commit/bafc4cb)]
* Remove dead link in Third-party tutorials section. Fixes [#1028](http://github.com/PrismJS/prism/issues/1028) [[`dffadc6`](http://github.com/PrismJS/prism/commit/dffadc6)]
* Most languages now use the greedy flag for better highlighting [[`7549ecc`](http://github.com/PrismJS/prism/commit/7549ecc)]
* .npmignore: Unignore components.js ([#1108](http://github.com/PrismJS/prism/issues/1108)) [[`1f699e7`](http://github.com/PrismJS/prism/commit/1f699e7)]
* Run before-highlight and after-highlight hooks even when no grammar is found. Fix [#1134](http://github.com/PrismJS/prism/issues/1134) [[`70cb472`](http://github.com/PrismJS/prism/commit/70cb472)]
* Replace [\w\W] with [\s\S] and [0-9] with \d in regexes ([#1107](http://github.com/PrismJS/prism/issues/1107)) [[`8aa2cc4`](http://github.com/PrismJS/prism/commit/8aa2cc4)]
* Fix corner cases for the greedy flag ([#1095](http://github.com/PrismJS/prism/issues/1095)) [[`6530709`](http://github.com/PrismJS/prism/commit/6530709)]
* Add Third Party Tutorial ([#1156](http://github.com/PrismJS/prism/issues/1156)) [[`c34e57b`](http://github.com/PrismJS/prism/commit/c34e57b)]
* Add Composer support ([#648](http://github.com/PrismJS/prism/issues/648)) [[`2989633`](http://github.com/PrismJS/prism/commit/2989633)]
* Remove IE8 plugin ([#992](http://github.com/PrismJS/prism/issues/992)) [[`25788eb`](http://github.com/PrismJS/prism/commit/25788eb)]
* Website: remove width and height on logo.svg, so it becomes scalable. Close [#1005](http://github.com/PrismJS/prism/issues/1005) [[`0621ff7`](http://github.com/PrismJS/prism/commit/0621ff7)]
* Remove yarn.lock ([#1098](http://github.com/PrismJS/prism/issues/1098)) [[`11eed25`](http://github.com/PrismJS/prism/commit/11eed25)]

## 1.6.0 (2016-12-03)

### New components

* __.properties__ ([#980](http://github.com/PrismJS/prism/issues/980)) [[`be6219a`](http://github.com/PrismJS/prism/commit/be6219a)]
* __Ada__ ([#949](http://github.com/PrismJS/prism/issues/949)) [[`65619f7`](http://github.com/PrismJS/prism/commit/65619f7)]
* __GraphQL__ ([#971](http://github.com/PrismJS/prism/issues/971)) [[`e018087`](http://github.com/PrismJS/prism/commit/e018087)]
* __Jolie__ ([#1014](http://github.com/PrismJS/prism/issues/1014)) [[`dfc1941`](http://github.com/PrismJS/prism/commit/dfc1941)]
* __LiveScript__ ([#982](http://github.com/PrismJS/prism/issues/982)) [[`62e258c`](http://github.com/PrismJS/prism/commit/62e258c)]
* __Reason__ (Fixes [#1046](http://github.com/PrismJS/prism/issues/1046)) [[`3cae6ce`](http://github.com/PrismJS/prism/commit/3cae6ce)]
* __Xojo__ ([#994](http://github.com/PrismJS/prism/issues/994)) [[`0224b7c`](http://github.com/PrismJS/prism/commit/0224b7c)]

### Updated components

* __APL__:
	* Add iota underbar ([#1024](http://github.com/PrismJS/prism/issues/1024)) [[`3c5c89a`](http://github.com/PrismJS/prism/commit/3c5c89a), [`ac21d33`](http://github.com/PrismJS/prism/commit/ac21d33)]
* __AsciiDoc__:
	* Optimized block regexps to prevent struggling on large files. Fixes [#1001](http://github.com/PrismJS/prism/issues/1001). [[`1a86d34`](http://github.com/PrismJS/prism/commit/1a86d34)]
* __Bash__:
	* Add `npm` to function list ([#969](http://github.com/PrismJS/prism/issues/969)) [[`912bdfe`](http://github.com/PrismJS/prism/commit/912bdfe)]
* __CSS__:
	* Make CSS strings greedy. Fix [#1013](http://github.com/PrismJS/prism/issues/1013). [[`e57e26d`](http://github.com/PrismJS/prism/commit/e57e26d)]
* __CSS Extras__:
	* Match attribute inside selectors [[`13fed76`](http://github.com/PrismJS/prism/commit/13fed76)]
* __Groovy__:
	* Fix order of decoding entities in groovy. Fixes [#1049](http://github.com/PrismJS/prism/issues/1049) ([#1050](http://github.com/PrismJS/prism/issues/1050)) [[`d75da8e`](http://github.com/PrismJS/prism/commit/d75da8e)]
* __Ini__:
	* Remove important token in ini definition ([#1047](http://github.com/PrismJS/prism/issues/1047)) [[`fe8ad8b`](http://github.com/PrismJS/prism/commit/fe8ad8b)]
* __JavaScript__:
	* Add exponentiation & spread/rest operator ([#991](http://github.com/PrismJS/prism/issues/991)) [[`b2de65a`](http://github.com/PrismJS/prism/commit/b2de65a), [`268d01e`](http://github.com/PrismJS/prism/commit/268d01e)]
* __JSON__:
	* JSON: Fixed issues with properties and strings + added tests. Fix [#1025](http://github.com/PrismJS/prism/issues/1025) [[`25a541d`](http://github.com/PrismJS/prism/commit/25a541d)]
* __Markup__:
	* Allow for dots in Markup tag names, but not in HTML tags included in Textile. Fixes [#888](http://github.com/PrismJS/prism/issues/888). [[`31ea66b`](http://github.com/PrismJS/prism/commit/31ea66b)]
	* Make doctype case-insensitive ([#1009](http://github.com/PrismJS/prism/issues/1009)) [[`3dd7219`](http://github.com/PrismJS/prism/commit/3dd7219)]
* __NSIS__:
	* Updated patterns ([#1032](http://github.com/PrismJS/prism/issues/1032)) [[`76ba1b8`](http://github.com/PrismJS/prism/commit/76ba1b8)]
* __PHP__:
	* Make comments greedy. Fix [#197](http://github.com/PrismJS/prism/issues/197) [[`318aab3`](http://github.com/PrismJS/prism/commit/318aab3)]
* __PowerShell__:
	* Fix highlighting of empty comments ([#977](http://github.com/PrismJS/prism/issues/977)) [[`4fda477`](http://github.com/PrismJS/prism/commit/4fda477)]
* __Puppet__:
	* Fix over-greedy regexp detection ([#978](http://github.com/PrismJS/prism/issues/978)) [[`105be25`](http://github.com/PrismJS/prism/commit/105be25)]
* __Ruby__:
	* Fix typo `Fload` to `Float` in prism-ruby.js ([#1023](http://github.com/PrismJS/prism/issues/1023)) [[`22cb018`](http://github.com/PrismJS/prism/commit/22cb018)]
	* Make strings greedy. Fixes [#1048](http://github.com/PrismJS/prism/issues/1048) [[`8b0520a`](http://github.com/PrismJS/prism/commit/8b0520a)]
* __SCSS__:
	* Alias statement as keyword. Fix [#246](http://github.com/PrismJS/prism/issues/246) [[`fd09391`](http://github.com/PrismJS/prism/commit/fd09391)]
	* Highlight variables inside selectors and properties. [[`d6b5c2f`](http://github.com/PrismJS/prism/commit/d6b5c2f)]
	* Highlight parent selector [[`8f5f1fa`](http://github.com/PrismJS/prism/commit/8f5f1fa)]
* __TypeScript__:
	* Add missing `from` keyword to typescript & set `ts` as alias. ([#1042](http://github.com/PrismJS/prism/issues/1042)) [[`cba78f3`](http://github.com/PrismJS/prism/commit/cba78f3)]

### New plugins

* __Copy to Clipboard__ ([#891](http://github.com/PrismJS/prism/issues/891)) [[`07b81ac`](http://github.com/PrismJS/prism/commit/07b81ac)]
* __Custom Class__ ([#950](http://github.com/PrismJS/prism/issues/950)) [[`a0bd686`](http://github.com/PrismJS/prism/commit/a0bd686)]
* __Data-URI Highlight__ ([#996](http://github.com/PrismJS/prism/issues/996)) [[`bdca61b`](http://github.com/PrismJS/prism/commit/bdca61b)]
* __Toolbar__ ([#891](http://github.com/PrismJS/prism/issues/891)) [[`07b81ac`](http://github.com/PrismJS/prism/commit/07b81ac)]

### Updated plugins

* __Autoloader__:
	* Updated documentation for Autoloader plugin [[`b4f3423`](http://github.com/PrismJS/prism/commit/b4f3423)]
    * Download all grammars as a zip from Autoloader plugin page ([#981](http://github.com/PrismJS/prism/issues/981)) [[`0d0a007`](http://github.com/PrismJS/prism/commit/0d0a007), [`5c815d3`](http://github.com/PrismJS/prism/commit/5c815d3)]
    * Removed duplicated script on Autoloader plugin page [[`9671996`](http://github.com/PrismJS/prism/commit/9671996)]
    * Don't try to load "none" component. Fix [#1000](http://github.com/PrismJS/prism/issues/1000) [[`f89b0b9`](http://github.com/PrismJS/prism/commit/f89b0b9)]
* __WPD__:
	* Fix at-rule detection + don't process if language is not handled [[`2626728`](http://github.com/PrismJS/prism/commit/2626728)]

### Other changes

* Improvement to greedy-flag ([#967](http://github.com/PrismJS/prism/issues/967)) [[`500121b`](http://github.com/PrismJS/prism/commit/500121b), [`9893489`](http://github.com/PrismJS/prism/commit/9893489)]
* Add setTimeout fallback for requestAnimationFrame. Fixes [#987](http://github.com/PrismJS/prism/issues/987). ([#988](http://github.com/PrismJS/prism/issues/988)) [[`c9bdcd3`](http://github.com/PrismJS/prism/commit/c9bdcd3)]
* Added aria-hidden attributes on elements created by the Line Highlight and Line Numbers plugins. Fixes [#574](http://github.com/PrismJS/prism/issues/574). [[`e5587a7`](http://github.com/PrismJS/prism/commit/e5587a7)]
* Don't insert space before ">" when there is no attributes [[`3dc8c9e`](http://github.com/PrismJS/prism/commit/3dc8c9e)]
* Added missing hooks-related tests for AsciiDoc, Groovy, Handlebars, Markup, PHP and Smarty [[`c1a0c1b`](http://github.com/PrismJS/prism/commit/c1a0c1b)]
* Fix issue when using Line numbers plugin and Normalise whitespace plugin together with Handlebars, PHP or Smarty. Fix [#1018](http://github.com/PrismJS/prism/issues/1018), [#997](http://github.com/PrismJS/prism/issues/997), [#935](http://github.com/PrismJS/prism/issues/935). Revert [#998](http://github.com/PrismJS/prism/issues/998). [[`86aa3d2`](http://github.com/PrismJS/prism/commit/86aa3d2)]
* Optimized logo ([#990](http://github.com/PrismJS/prism/issues/990)) ([#1002](http://github.com/PrismJS/prism/issues/1002)) [[`f69e570`](http://github.com/PrismJS/prism/commit/f69e570), [`218fd25`](http://github.com/PrismJS/prism/commit/218fd25)]
* Remove unneeded prefixed CSS ([#989](http://github.com/PrismJS/prism/issues/989)) [[`5e56833`](http://github.com/PrismJS/prism/commit/5e56833)]
* Optimize images ([#1007](http://github.com/PrismJS/prism/issues/1007)) [[`b2fa6d5`](http://github.com/PrismJS/prism/commit/b2fa6d5)]
* Add yarn.lock to .gitignore ([#1035](http://github.com/PrismJS/prism/issues/1035)) [[`03ecf74`](http://github.com/PrismJS/prism/commit/03ecf74)]
* Fix greedy flag bug. Fixes [#1039](http://github.com/PrismJS/prism/issues/1039) [[`32cd99f`](http://github.com/PrismJS/prism/commit/32cd99f)]
* Ruby: Fix test after [#1023](http://github.com/PrismJS/prism/issues/1023) [[`b15d43b`](http://github.com/PrismJS/prism/commit/b15d43b)]
* Ini: Fix test after [#1047](http://github.com/PrismJS/prism/issues/1047) [[`25cdd3f`](http://github.com/PrismJS/prism/commit/25cdd3f)]
* Reduce risk of XSS ([#1051](http://github.com/PrismJS/prism/issues/1051)) [[`17e33bc`](http://github.com/PrismJS/prism/commit/17e33bc)]
* env.code can be modified by before-sanity-check hook even when using language-none. Fix [#1066](http://github.com/PrismJS/prism/issues/1066) [[`83bafbd`](http://github.com/PrismJS/prism/commit/83bafbd)]


## 1.5.1 (2016-06-05)

### Updated components

* __Normalize Whitespace__:
	* Add class that disables the normalize whitespace plugin [[`9385c54`](http://github.com/PrismJS/prism/commit/9385c54)]
* __JavaScript Language__:
	* Rearrange the `string` and `template-string` token in JavaScript [[`1158e46`](http://github.com/PrismJS/prism/commit/1158e46)]
* __SQL Language__:
	* add delimeter and delimeters keywords to sql ([#958](http://github.com/PrismJS/prism/pull/958)) [[`a9ef24e`](http://github.com/PrismJS/prism/commit/a9ef24e)]
	* add AUTO_INCREMENT and DATE keywords to sql ([#954](http://github.com/PrismJS/prism/pull/954)) [[`caea2af`](http://github.com/PrismJS/prism/commit/caea2af)]
* __Diff Language__:
	* Highlight diff lines with only + or - ([#952](http://github.com/PrismJS/prism/pull/952)) [[`4d0526f`](http://github.com/PrismJS/prism/commit/4d0526f)]

### Other changes

* Allow for asynchronous loading of prism.js ([#959](http://github.com/PrismJS/prism/pull/959))
* Use toLowerCase on language names ([#957](http://github.com/PrismJS/prism/pull/957)) [[`acd9508`](http://github.com/PrismJS/prism/commit/acd9508)]
* link to index for basic usage - fixes [#945](http://github.com/PrismJS/prism/issues/945) ([#946](http://github.com/PrismJS/prism/pull/946)) [[`6c772d8`](http://github.com/PrismJS/prism/commit/6c772d8)]
* Fixed monospace typo ([#953](http://github.com/PrismJS/prism/pull/953)) [[`e6c3498`](http://github.com/PrismJS/prism/commit/e6c3498)]

## 1.5.0 (2016-05-01)

### New components

* __Bro Language__ ([#925](http://github.com/PrismJS/prism/pull/925))
* __Protocol Buffers Language__ ([#938](http://github.com/PrismJS/prism/pull/938)) [[`ae4a4f2`](http://github.com/PrismJS/prism/commit/ae4a4f2)]

### Updated components

* __Keep Markup__:
	* Fix Keep Markup plugin incorrect highlighting ([#880](http://github.com/PrismJS/prism/pull/880)) [[`24841ef`](http://github.com/PrismJS/prism/commit/24841ef)]
* __Groovy Language__:
	* Fix double HTML-encoding bug in Groovy language [[`24a0936`](http://github.com/PrismJS/prism/commit/24a0936)]
* __Java Language__:
	* Adding annotation token for Java ([#905](http://github.com/PrismJS/prism/pull/905)) [[`367ace6`](http://github.com/PrismJS/prism/commit/367ace6)]
* __SAS Language__:
	* Add missing keywords for SAS ([#922](http://github.com/PrismJS/prism/pull/922))
* __YAML Language__:
	* fix hilighting of YAML keys on first line of code block ([#943](http://github.com/PrismJS/prism/pull/943)) [[`f19db81`](http://github.com/PrismJS/prism/commit/f19db81)]
* __C# Language__:
	* Support for generic methods in csharp [[`6f75735`](http://github.com/PrismJS/prism/commit/6f75735)]

### New plugins

* __Unescaped Markup__ [[`07d77e5`](http://github.com/PrismJS/prism/commit/07d77e5)]
* __Normalize Whitespace__ ([#847](http://github.com/PrismJS/prism/pull/847)) [[`e86ec01`](http://github.com/PrismJS/prism/commit/e86ec01)]

### Other changes

* Add JSPM support [[`ad048ab`](http://github.com/PrismJS/prism/commit/ad048ab)]
* update linear-gradient syntax from `left` to `to right` [[`cd234dc`](http://github.com/PrismJS/prism/commit/cd234dc)]
* Add after-property to allow ordering of plugins [[`224b7a1`](http://github.com/PrismJS/prism/commit/224b7a1)]
* Partial solution for the "Comment-like substrings"-problem [[`2705c50`](http://github.com/PrismJS/prism/commit/2705c50)]
* Add property 'aliasTitles' to components.js [[`54400fb`](http://github.com/PrismJS/prism/commit/54400fb)]
* Add before-highlightall hook [[`70a8602`](http://github.com/PrismJS/prism/commit/70a8602)]
* Fix catastrophic backtracking regex issues in JavaScript [[`ab65be2`](http://github.com/PrismJS/prism/commit/ab65be2)]

## 1.4.1 (2016-02-03)

### Other changes

* Fix DFS bug in Prism core [[`b86c727`](http://github.com/PrismJS/prism/commit/b86c727)]

## 1.4.0 (2016-02-03)

### New components

* __Solarized Light__ ([#855](http://github.com/PrismJS/prism/pull/855)) [[`70846ba`](http://github.com/PrismJS/prism/commit/70846ba)]
* __JSON__ ([#370](http://github.com/PrismJS/prism/pull/370)) [[`ad2fcd0`](http://github.com/PrismJS/prism/commit/ad2fcd0)]

### Updated components

* __Show Language__:
	* Remove data-language attribute ([#840](http://github.com/PrismJS/prism/pull/840)) [[`eb9a83c`](http://github.com/PrismJS/prism/commit/eb9a83c)]
	* Allow custom label without a language mapping ([#837](http://github.com/PrismJS/prism/pull/837)) [[`7e74aef`](http://github.com/PrismJS/prism/commit/7e74aef)]
* __JSX__:
	* Better Nesting in JSX attributes ([#842](http://github.com/PrismJS/prism/pull/842)) [[`971dda7`](http://github.com/PrismJS/prism/commit/971dda7)]
* __File Highlight__:
	* Defer File Highlight until the full DOM has loaded. ([#844](http://github.com/PrismJS/prism/pull/844)) [[`6f995ef`](http://github.com/PrismJS/prism/commit/6f995ef)]
* __Coy Theme__:
	* Fix coy theme shadows ([#865](http://github.com/PrismJS/prism/pull/865)) [[`58d2337`](http://github.com/PrismJS/prism/commit/58d2337)]
* __Show Invisibles__:
	* Ensure show-invisibles compat with autoloader ([#874](http://github.com/PrismJS/prism/pull/874)) [[`c3cfb1f`](http://github.com/PrismJS/prism/commit/c3cfb1f)]
	* Add support for the space character for the show-invisibles plugin ([#876](http://github.com/PrismJS/prism/pull/876)) [[`05442d3`](http://github.com/PrismJS/prism/commit/05442d3)]

### New plugins

* __Command Line__ ([#831](http://github.com/PrismJS/prism/pull/831)) [[`8378906`](http://github.com/PrismJS/prism/commit/8378906)]

### Other changes

* Use document.currentScript instead of document.getElementsByTagName() [[`fa98743`](http://github.com/PrismJS/prism/commit/fa98743)]
* Add prefix for Firefox selection and move prefixed rule first [[`6d54717`](http://github.com/PrismJS/prism/commit/6d54717)]
* No background for `<code>` in `<pre>` [[`8c310bc`](http://github.com/PrismJS/prism/commit/8c310bc)]
* Fixing to initial copyright year [[`69cbf7a`](http://github.com/PrismJS/prism/commit/69cbf7a)]
* Simplify the “lang” regex [[`417f54a`](http://github.com/PrismJS/prism/commit/417f54a)]
* Fix broken heading links [[`a7f9e62`](http://github.com/PrismJS/prism/commit/a7f9e62)]
* Prevent infinite recursion in DFS [[`02894e1`](http://github.com/PrismJS/prism/commit/02894e1)]
* Fix incorrect page title [[`544b56f`](http://github.com/PrismJS/prism/commit/544b56f)]
* Link scss to webplatform wiki [[`08d979a`](http://github.com/PrismJS/prism/commit/08d979a)]
* Revert white-space to normal when code is inline instead of in a pre [[`1a971b5`](http://github.com/PrismJS/prism/commit/1a971b5)]

## 1.3.0 (2015-10-26)

### New components

* __AsciiDoc__ ([#800](http://github.com/PrismJS/prism/issues/800)) [[`6803ca0`](http://github.com/PrismJS/prism/commit/6803ca0)]
* __Haxe__ ([#811](http://github.com/PrismJS/prism/issues/811)) [[`bd44341`](http://github.com/PrismJS/prism/commit/bd44341)]
* __Icon__ ([#803](http://github.com/PrismJS/prism/issues/803)) [[`b43c5f3`](http://github.com/PrismJS/prism/commit/b43c5f3)]
* __Kotlin__ ([#814](http://github.com/PrismJS/prism/issues/814)) [[`e8a31a5`](http://github.com/PrismJS/prism/commit/e8a31a5)]
* __Lua__ ([#804](http://github.com/PrismJS/prism/issues/804)) [[`a36bc4a`](http://github.com/PrismJS/prism/commit/a36bc4a)]
* __Nix__ ([#795](http://github.com/PrismJS/prism/issues/795)) [[`9b275c8`](http://github.com/PrismJS/prism/commit/9b275c8)]
* __Oz__ ([#805](http://github.com/PrismJS/prism/issues/805)) [[`388c53f`](http://github.com/PrismJS/prism/commit/388c53f)]
* __PARI/GP__ ([#802](http://github.com/PrismJS/prism/issues/802)) [[`253c035`](http://github.com/PrismJS/prism/commit/253c035)]
* __Parser__ ([#808](http://github.com/PrismJS/prism/issues/808)) [[`a953b3a`](http://github.com/PrismJS/prism/commit/a953b3a)]
* __Puppet__ ([#813](http://github.com/PrismJS/prism/issues/813)) [[`81933ee`](http://github.com/PrismJS/prism/commit/81933ee)]
* __Roboconf__ ([#812](http://github.com/PrismJS/prism/issues/812)) [[`f5db346`](http://github.com/PrismJS/prism/commit/f5db346)]

### Updated components

* __C__:
	* Highlight directives in preprocessor lines ([#801](http://github.com/PrismJS/prism/issues/801)) [[`ad316a3`](http://github.com/PrismJS/prism/commit/ad316a3)]
* __C#__:
	* Highlight directives in preprocessor lines ([#801](http://github.com/PrismJS/prism/issues/801)) [[`ad316a3`](http://github.com/PrismJS/prism/commit/ad316a3)]
	* Fix detection of float numbers ([#806](http://github.com/PrismJS/prism/issues/806)) [[`1dae72b`](http://github.com/PrismJS/prism/commit/1dae72b)]
* __F#__:
	* Highlight directives in preprocessor lines ([#801](http://github.com/PrismJS/prism/issues/801)) [[`ad316a3`](http://github.com/PrismJS/prism/commit/ad316a3)]
* __JavaScript__:
	* Highlight true and false as booleans ([#801](http://github.com/PrismJS/prism/issues/801)) [[`ad316a3`](http://github.com/PrismJS/prism/commit/ad316a3)]
* __Python__:
	* Highlight triple-quoted strings before comments. Fix [#815](http://github.com/PrismJS/prism/issues/815) [[`90fbf0b`](http://github.com/PrismJS/prism/commit/90fbf0b)]

### New plugins

* __Previewer: Time__ ([#790](http://github.com/PrismJS/prism/issues/790)) [[`88173de`](http://github.com/PrismJS/prism/commit/88173de)]
* __Previewer: Angle__ ([#791](http://github.com/PrismJS/prism/issues/791)) [[`a434c86`](http://github.com/PrismJS/prism/commit/a434c86)]

### Other changes

* Increase mocha's timeout [[`f1c41db`](http://github.com/PrismJS/prism/commit/f1c41db)]
* Prevent most errors in IE8. Fix [#9](http://github.com/PrismJS/prism/issues/9) [[`9652d75`](http://github.com/PrismJS/prism/commit/9652d75)]
* Add U.S. Web Design Standards on homepage. Fix [#785](http://github.com/PrismJS/prism/issues/785) [[`e10d48b`](http://github.com/PrismJS/prism/commit/e10d48b), [`79ebbf8`](http://github.com/PrismJS/prism/commit/79ebbf8), [`2f7088d`](http://github.com/PrismJS/prism/commit/2f7088d)]
* Added gulp task to autolink PRs and commits in changelog [[`5ec4e4d`](http://github.com/PrismJS/prism/commit/5ec4e4d)]
* Use child processes to run each set of tests, in order to deal with the memory leak in vm.runInNewContext() [[`9a4b6fa`](http://github.com/PrismJS/prism/commit/9a4b6fa)]

## 1.2.0 (2015-10-07)

### New components

* __Batch__ ([#781](http://github.com/PrismJS/prism/issues/781)) [[`eab5b06`](http://github.com/PrismJS/prism/commit/eab5b06)]

### Updated components

* __ASP.NET__:
	* Simplified pattern for `<script>` [[`29643f4`](http://github.com/PrismJS/prism/issues/29643f4)]
* __Bash__:
	* Fix regression in strings ([#792](http://github.com/PrismJS/prism/issues/792)) [[`bd275c2`](http://github.com/PrismJS/prism/commit/bd275c2)]
	* Substantially reduce wrongly highlighted stuff ([#793](http://github.com/PrismJS/prism/issues/793)) [[`ac6fe2e`](http://github.com/PrismJS/prism/commit/ac6fe2e)]
* __CSS__:
	* Simplified pattern for `<style>` [[`29643f4`](http://github.com/PrismJS/prism/issues/29643f4)]
* __JavaScript__:
	* Simplified pattern for `<script>` [[`29643f4`](http://github.com/PrismJS/prism/issues/29643f4)]

### New plugins

* __Previewer: Gradient__ ([#783](http://github.com/PrismJS/prism/issues/783)) [[`9a63483`](http://github.com/PrismJS/prism/commit/9a63483)]

### Updated plugins

* __Previewer: Color__
	* Add support for Sass variables [[`3a1fb04`](http://github.com/PrismJS/prism/commit/3a1fb04)]

* __Previewer: Easing__
	* Add support for Sass variables [[`7c7ab4e`](http://github.com/PrismJS/prism/commit/7c7ab4e)]

### Other changes

* Test runner: Allow to run tests for only some languages [[`5ade8a5`](http://github.com/PrismJS/prism/issues/5ade8a5)]
* Download page: Fixed wrong components order raising error in generated file ([#797](http://github.com/PrismJS/prism/issues/787)) [[`7a6aed8`](http://github.com/PrismJS/prism/commit/7a6aed8)]

## 1.1.0 (2015-10-04)

### New components

* __ABAP__ ([#636](http://github.com/PrismJS/prism/issues/636)) [[`75b0328`](http://github.com/PrismJS/prism/commit/75b0328), [`0749129`](http://github.com/PrismJS/prism/commit/0749129)]
* __APL__ ([#308](http://github.com/PrismJS/prism/issues/308)) [[`1f45942`](http://github.com/PrismJS/prism/commit/1f45942), [`33a295f`](http://github.com/PrismJS/prism/commit/33a295f)]
* __AutoIt__ ([#771](http://github.com/PrismJS/prism/issues/771)) [[`211a41c`](http://github.com/PrismJS/prism/commit/211a41c)]
* __BASIC__ ([#620](http://github.com/PrismJS/prism/issues/620)) [[`805a0ce`](http://github.com/PrismJS/prism/commit/805a0ce)]
* __Bison__ ([#764](http://github.com/PrismJS/prism/issues/764)) [[`7feb135`](http://github.com/PrismJS/prism/commit/7feb135)]
* __Crystal__ ([#780](http://github.com/PrismJS/prism/issues/780)) [[`5b473de`](http://github.com/PrismJS/prism/commit/5b473de), [`414848d`](http://github.com/PrismJS/prism/commit/414848d)]
* __D__ ([#613](http://github.com/PrismJS/prism/issues/613)) [[`b5e741c`](http://github.com/PrismJS/prism/commit/b5e741c)]
* __Diff__ ([#450](http://github.com/PrismJS/prism/issues/450)) [[`ef41c74`](http://github.com/PrismJS/prism/commit/ef41c74)]
* __Docker__ ([#576](http://github.com/PrismJS/prism/issues/576)) [[`e808352`](http://github.com/PrismJS/prism/commit/e808352)]
* __Elixir__ ([#614](http://github.com/PrismJS/prism/issues/614)) [[`a1c028c`](http://github.com/PrismJS/prism/commit/a1c028c), [`c451611`](http://github.com/PrismJS/prism/commit/c451611), [`2e637f0`](http://github.com/PrismJS/prism/commit/2e637f0), [`ccb6566`](http://github.com/PrismJS/prism/commit/ccb6566)]
* __GLSL__ ([#615](http://github.com/PrismJS/prism/issues/615)) [[`247da05`](http://github.com/PrismJS/prism/commit/247da05)]
* __Inform 7__ ([#616](http://github.com/PrismJS/prism/issues/616)) [[`d2595b4`](http://github.com/PrismJS/prism/commit/d2595b4)]
* __J__ ([#623](http://github.com/PrismJS/prism/issues/623)) [[`0cc50b2`](http://github.com/PrismJS/prism/commit/0cc50b2)]
* __MEL__ ([#618](http://github.com/PrismJS/prism/issues/618)) [[`8496c14`](http://github.com/PrismJS/prism/commit/8496c14)]
* __Mizar__ ([#619](http://github.com/PrismJS/prism/issues/619)) [[`efde61d`](http://github.com/PrismJS/prism/commit/efde61d)]
* __Monkey__ ([#621](http://github.com/PrismJS/prism/issues/621)) [[`fdd4a3c`](http://github.com/PrismJS/prism/commit/fdd4a3c)]
* __nginx__ ([#776](http://github.com/PrismJS/prism/issues/776)) [[`dc4fc19`](http://github.com/PrismJS/prism/commit/dc4fc19), [`e62c88e`](http://github.com/PrismJS/prism/commit/e62c88e)]
* __Nim__ ([#622](http://github.com/PrismJS/prism/issues/622)) [[`af9c49a`](http://github.com/PrismJS/prism/commit/af9c49a)]
* __OCaml__ ([#628](http://github.com/PrismJS/prism/issues/628)) [[`556c04d`](http://github.com/PrismJS/prism/commit/556c04d)]
* __Processing__ ([#629](http://github.com/PrismJS/prism/issues/629)) [[`e47087b`](http://github.com/PrismJS/prism/commit/e47087b)]
* __Prolog__ ([#630](http://github.com/PrismJS/prism/issues/630)) [[`dd04c32`](http://github.com/PrismJS/prism/commit/dd04c32)]
* __Pure__ ([#626](http://github.com/PrismJS/prism/issues/626)) [[`9c276ab`](http://github.com/PrismJS/prism/commit/9c276ab)]
* __Q__ ([#624](http://github.com/PrismJS/prism/issues/624)) [[`c053c9e`](http://github.com/PrismJS/prism/commit/c053c9e)]
* __Qore__ [[`125e91f`](http://github.com/PrismJS/prism/commit/125e91f)]
* __Tcl__ [[`a3e751a`](http://github.com/PrismJS/prism/commit/a3e751a), [`11ff829`](http://github.com/PrismJS/prism/commit/11ff829)]
* __Textile__ ([#544](http://github.com/PrismJS/prism/issues/544)) [[`d0c6764`](http://github.com/PrismJS/prism/commit/d0c6764)]
* __Verilog__ ([#640](http://github.com/PrismJS/prism/issues/640)) [[`44a11c2`](http://github.com/PrismJS/prism/commit/44a11c2), [`795eb99`](http://github.com/PrismJS/prism/commit/795eb99)]
* __Vim__ [[`69ea994`](http://github.com/PrismJS/prism/commit/69ea994)]

### Updated components

* __Bash__:
	* Add support for Here-Documents ([#787](http://github.com/PrismJS/prism/issues/787)) [[`b57a096`](http://github.com/PrismJS/prism/commit/b57a096)]
	* Remove C-like dependency ([#789](http://github.com/PrismJS/prism/issues/789)) [[`1ab4619`](http://github.com/PrismJS/prism/commit/1ab4619)]
* __C__:
	* Fixed numbers [[`4d64d07`](http://github.com/PrismJS/prism/commit/4d64d07), [`071c3dd`](http://github.com/PrismJS/prism/commit/071c3dd)]
* __C-like__:
	* Add word boundary before class-name prefixes [[`aa757f6`](http://github.com/PrismJS/prism/commit/aa757f6)]
	* Improved operator regex + add != and !== [[`135ee9d`](http://github.com/PrismJS/prism/commit/135ee9d)]
	* Optimized string regexp [[`792e35c`](http://github.com/PrismJS/prism/commit/792e35c)]
* __F#__:
	* Fixed keywords containing exclamation mark [[`09f2005`](http://github.com/PrismJS/prism/commit/09f2005)]
	* Improved string pattern [[`0101c89`](http://github.com/PrismJS/prism/commit/0101c89)]
	* Insert preprocessor before keyword + don't allow line feeds before # [[`fdc9477`](http://github.com/PrismJS/prism/commit/fdc9477)]
	* Fixed numbers [[`0aa0791`](http://github.com/PrismJS/prism/commit/0aa0791)]
* __Gherkin__:
	* Don't allow spaces in tags [[`48ff8b7`](http://github.com/PrismJS/prism/commit/48ff8b7)]
	* Handle \r\n and \r + allow feature alone + don't match blank td/th [[`ce1ec3b`](http://github.com/PrismJS/prism/commit/ce1ec3b)]
* __Git__:
	* Added more examples ([#652](http://github.com/PrismJS/prism/issues/652)) [[`95dc102`](http://github.com/PrismJS/prism/commit/95dc102)]
	* Add support for unified diff. Fixes [#769](http://github.com/PrismJS/prism/issues/769), fixes [#357](http://github.com/PrismJS/prism/issues/357), closes [#401](http://github.com/PrismJS/prism/issues/401) [[`3aadd5d`](http://github.com/PrismJS/prism/commit/3aadd5d)]
* __Go__:
	* Improved operator regexp + removed punctuation from it [[`776ab90`](http://github.com/PrismJS/prism/commit/776ab90)]
* __Haml__:
	* Combine both multiline-comment regexps + handle \r\n and \r [[`f77b40b`](http://github.com/PrismJS/prism/commit/f77b40b)]
	* Handle \r\n and \r in filter regex [[`bbe68ac`](http://github.com/PrismJS/prism/commit/bbe68ac)]
* __Handlebars__:
	* Fix empty strings, add plus sign in exponential notation, improve block pattern and variable pattern [[`c477f9a`](http://github.com/PrismJS/prism/commit/c477f9a)]
	* Properly escape special replacement patterns ($) in Handlebars, PHP and Smarty. Fix [#772](http://github.com/PrismJS/prism/issues/772) [[`895bf46`](http://github.com/PrismJS/prism/commit/895bf46)]
* __Haskell__:
	* Removed useless backslashes and parentheses + handle \r\n and \r + simplify number regexp + fix operator regexp [[`1cc8d8e`](http://github.com/PrismJS/prism/commit/1cc8d8e)]
* __HTTP__:
	* Fix indentation + Add multiline flag for more flexibility + Fix response status + Handle \r\n and \r [[`aaa90f1`](http://github.com/PrismJS/prism/commit/aaa90f1)]
* __Ini__:
	* Fix some regexps + remove unused flags [[`53d5839`](http://github.com/PrismJS/prism/commit/53d5839)]
* __Jade__:
	* Add todo list + remove single-line comment pattern + simplified most patterns with m flag + handle \r\n and \r [[`a79e838`](http://github.com/PrismJS/prism/commit/a79e838)]
* __Java__:
	* Fix number regexp + simplified number regexp and optimized operator regexp [[`21e20b9`](http://github.com/PrismJS/prism/commit/21e20b9)]
* __JavaScript__:
	* JavaScript: Allow for all non-ASCII characters in function names. Fix [#400](http://github.com/PrismJS/prism/issues/400) [[`29e26dc`](http://github.com/PrismJS/prism/commit/29e26dc)]
* __JSX__:
	* Allow for one level of nesting in scripts (Fix [#717](http://github.com/PrismJS/prism/issues/717)) [[`90c75d5`](http://github.com/PrismJS/prism/commit/90c75d5)]
* __Julia__:
	* Simplify comment regexp + improved number regexp + improved operator regexp [[`bcac7d4`](http://github.com/PrismJS/prism/commit/bcac7d4)]
* __Keyman__:
	* Move header statements above keywords [[`23a444c`](http://github.com/PrismJS/prism/commit/23a444c)]
* __LaTeX__:
	* Simplify comment regexp [[`132b41a`](http://github.com/PrismJS/prism/commit/132b41a)]
	* Extend support [[`942a6ec`](http://github.com/PrismJS/prism/commit/942a6ec)]
* __Less__:
	* Remove useless part in property regexp [[`80d8260`](http://github.com/PrismJS/prism/commit/80d8260)]
* __LOLCODE__:
	* Removed useless parentheses [[`8147c9b`](http://github.com/PrismJS/prism/commit/8147c9b)]
* __Makefile__:
	* Add known failures in example [[`e0f8984`](http://github.com/PrismJS/prism/commit/e0f8984)]
	* Handle \r\n in comments and strings + fix "-include" keyword
* __Markup__:
	* Simplify patterns + handle \r\n and \r [[`4c551e8`](http://github.com/PrismJS/prism/commit/4c551e8)]
	* Don't allow = to appear in tag name [[`85d8a55`](http://github.com/PrismJS/prism/commit/85d8a55)]
	* Don't allow dot inside tag name [[`283691e`](http://github.com/PrismJS/prism/commit/283691e)]
* __MATLAB__:
	* Simplify string pattern to remove lookbehind [[`a3cbecc`](http://github.com/PrismJS/prism/commit/a3cbecc)]
* __NASM__:
	* Converted indents to tabs, removed uneeded escapes, added lookbehinds [[`a92e4bd`](http://github.com/PrismJS/prism/commit/a92e4bd)]
* __NSIS__:
	* Simplified patterns [[`bbd83d4`](http://github.com/PrismJS/prism/commit/bbd83d4)]
	* Fix operator regexp [[`44ad8dc`](http://github.com/PrismJS/prism/commit/44ad8dc)]
* __Objective-C__:
	* Simplified regexps + fix strings + handle \r [[`1d33147`](http://github.com/PrismJS/prism/commit/1d33147)]
	* Fix operator regexp [[`e9d382e`](http://github.com/PrismJS/prism/commit/e9d382e)]
* __Pascal__:
	* Simplified regexps [[`c03c8a4`](http://github.com/PrismJS/prism/commit/c03c8a4)]
* __Perl__:
	* Simplified regexps + Made most string and regexp patterns multi-line + Added support for regexp's n flag + Added missing operators [[`71b00cc`](http://github.com/PrismJS/prism/commit/71b00cc)]
* __PHP__:
	* Simplified patterns [[`f9d9452`](http://github.com/PrismJS/prism/commit/f9d9452)]
	* Properly escape special replacement patterns ($) in Handlebars, PHP and Smarty. Fix [#772](http://github.com/PrismJS/prism/issues/772) [[`895bf46`](http://github.com/PrismJS/prism/commit/895bf46)]
* __PHP Extras__:
	* Fix $this regexp + improve global regexp [[`781fdad`](http://github.com/PrismJS/prism/commit/781fdad)]
* __PowerShell__:
	* Update definitions for command/alias/operators [[`14da55c`](http://github.com/PrismJS/prism/commit/14da55c)]
* __Python__:
	* Added async/await and @ operator ([#656](http://github.com/PrismJS/prism/issues/656)) [[`7f1ae75`](http://github.com/PrismJS/prism/commit/7f1ae75)]
	* Added 'self' keyword and support for class names ([#677](http://github.com/PrismJS/prism/issues/677)) [[`d9d4ab2`](http://github.com/PrismJS/prism/commit/d9d4ab2)]
	* Simplified regexps + don't capture where unneeded + fixed operators [[`530f5f0`](http://github.com/PrismJS/prism/commit/530f5f0)]
* __R__:
	* Fixed and simplified patterns [[`c20c3ec`](http://github.com/PrismJS/prism/commit/c20c3ec)]
* __reST__:
	* Simplified some patterns, fixed others, prevented blank comments to match, moved list-bullet down to prevent breaking quotes [[`e6c6b85`](http://github.com/PrismJS/prism/commit/e6c6b85)]
* __Rip__:
	* Fixed some regexp + moved down numbers [[`1093f7d`](http://github.com/PrismJS/prism/commit/1093f7d)]
* __Ruby__:
	* Code cleaning, handle \r\n and \r, fix some regexps [[`dd4989f`](http://github.com/PrismJS/prism/commit/dd4989f)]
	* Add % notations for strings and regexps. Fix [#590](http://github.com/PrismJS/prism/issues/590) [[`2d37800`](http://github.com/PrismJS/prism/commit/2d37800)]
* __Rust__:
	* Simplified patterns and fixed operators [[`6c8494f`](http://github.com/PrismJS/prism/commit/6c8494f)]
* __SAS__:
	* Simplified datalines and optimized operator patterns [[`6ebb96f`](http://github.com/PrismJS/prism/commit/6ebb96f)]
* __Sass__:
	* Add missing require in components [[`35b8c50`](http://github.com/PrismJS/prism/commit/35b8c50)]
	* Fix comments, operators and selectors and simplified patterns [[`28759d0`](http://github.com/PrismJS/prism/commit/28759d0)]
	* Highlight "-" as operator only if surrounded by spaces, in order to not break hyphenated values (e.g. "ease-in-out") [[`b2763e7`](http://github.com/PrismJS/prism/commit/b2763e7)]
* __Scala__:
	* Simplified patterns [[`daf2597`](http://github.com/PrismJS/prism/commit/daf2597)]
* __Scheme__:
	* Add missing lookbehind on number pattern. Fix [#702](http://github.com/PrismJS/prism/issues/702) [[`3120ff7`](http://github.com/PrismJS/prism/commit/3120ff7)]
	* Fixes and simplifications [[`068704a`](http://github.com/PrismJS/prism/commit/068704a)]
	* Don't match content of symbols starting with a parenthesis [[`fa7df08`](http://github.com/PrismJS/prism/commit/fa7df08)]
* __Scss__:
	* Simplified patterns + fixed operators + don't match empty selectors [[`672c167`](http://github.com/PrismJS/prism/commit/672c167)]
* __Smalltalk__:
	* Simplified patterns [[`d896622`](http://github.com/PrismJS/prism/commit/d896622)]
* __Smarty__:
	* Optimized regexps + fixed punctuation and operators [[`1446700`](http://github.com/PrismJS/prism/commit/1446700)]
	* Properly escape special replacement patterns ($) in Handlebars, PHP and Smarty. Fix [#772](http://github.com/PrismJS/prism/issues/772) [[`895bf46`](http://github.com/PrismJS/prism/commit/895bf46)]
* __SQL__:
	* Simplified regexp + fixed keywords and operators + add CHARSET keyword [[`d49fec0`](http://github.com/PrismJS/prism/commit/d49fec0)]
* __Stylus__:
	* Rewrote the component entirely [[`7729728`](http://github.com/PrismJS/prism/commit/7729728)]
* __Swift__:
	* Optimized keywords lists and removed duplicates [[`936e429`](http://github.com/PrismJS/prism/commit/936e429)]
	* Add support for string interpolation. Fix [#448](http://github.com/PrismJS/prism/issues/448) [[`89cd5d0`](http://github.com/PrismJS/prism/commit/89cd5d0)]
* __Twig__:
	* Prevent "other" pattern from matching blank strings [[`cae2cef`](http://github.com/PrismJS/prism/commit/cae2cef)]
	* Optimized regexps + fixed operators + added missing operators/keywords [[`2d8271f`](http://github.com/PrismJS/prism/commit/2d8271f)]
* __VHDL__:
	* Move operator overloading before strings, don't capture if not needed, handle \r\n and \r, fix numbers [[`4533f17`](http://github.com/PrismJS/prism/commit/4533f17)]
* __Wiki markup__:
	* Fixed emphasis + merged some url patterns + added TODOs [[`8cf9e6a`](http://github.com/PrismJS/prism/commit/8cf9e6a)]
* __YAML__:
	* Handled \r\n and \r, simplified some patterns, fixed "---" [[`9e33e0a`](http://github.com/PrismJS/prism/commit/9e33e0a)]

### New plugins

* __Autoloader__ ([#766](http://github.com/PrismJS/prism/issues/766)) [[`ed4ccfe`](http://github.com/PrismJS/prism/commit/ed4ccfe)]
* __JSONP Highlight__ [[`b2f14d9`](http://github.com/PrismJS/prism/commit/b2f14d9)]
* __Keep Markup__ ([#770](http://github.com/PrismJS/prism/issues/770)) [[`bd3e9ea`](http://github.com/PrismJS/prism/commit/bd3e9ea)]
* __Previewer: Base__ ([#767](http://github.com/PrismJS/prism/issues/767)) [[`cf764c0`](http://github.com/PrismJS/prism/commit/cf764c0)]
* __Previewer: Color__ ([#767](http://github.com/PrismJS/prism/issues/767)) [[`cf764c0`](http://github.com/PrismJS/prism/commit/cf764c0)]
* __Previewer: Easing__ ([#773](http://github.com/PrismJS/prism/issues/773)) [[`513137c`](http://github.com/PrismJS/prism/commit/513137c), [`9207258`](http://github.com/PrismJS/prism/commit/9207258), [`4303c94`](http://github.com/PrismJS/prism/commit/4303c94)]
* __Remove initial line feed__ [[`ed9f2b2`](http://github.com/PrismJS/prism/commit/ed9f2b2), [`b8d098e`](http://github.com/PrismJS/prism/commit/b8d098e)]

### Updated plugins

* __Autolinker__:
	* Don't process all grammars on load, process each one in before-highlight. Should fix [#760](http://github.com/PrismJS/prism/issues/760) [[`a572495`](http://github.com/PrismJS/prism/commit/a572495)]
* __Line Highlight__:
	* Run in `complete` hook [[`f237e67`](http://github.com/PrismJS/prism/commit/f237e67)]
	* Fixed position when font-size is odd ([#668](http://github.com/PrismJS/prism/issues/668)) [[`86bbd4c`](http://github.com/PrismJS/prism/commit/86bbd4c), [`8ed7ce3`](http://github.com/PrismJS/prism/commit/8ed7ce3)]
* __Line Numbers__:
	* Run in `complete` hook [[`3f4d918`](http://github.com/PrismJS/prism/commit/3f4d918)]
	* Don't run if already exists [[`c89bbdb`](http://github.com/PrismJS/prism/commit/c89bbdb)]
	* Don't run if block is empty. Fix [#669](http://github.com/PrismJS/prism/issues/669) [[`ee463e8`](http://github.com/PrismJS/prism/commit/ee463e8)]
	* Correct calculation for number of lines (fix [#385](http://github.com/PrismJS/prism/issues/385)) [[`14f3f80`](http://github.com/PrismJS/prism/commit/14f3f80)]
	* Fix computation of line numbers for single-line code blocks. Fix [#721](http://github.com/PrismJS/prism/issues/721) [[`02b220e`](http://github.com/PrismJS/prism/commit/02b220e)]
	* Fixing word wrap on long code lines [[`56b3d29`](http://github.com/PrismJS/prism/commit/56b3d29)]
	* Fixing coy theme + line numbers plugin overflowing on long blocks of text ([#762](http://github.com/PrismJS/prism/issues/762)) [[`a0127eb`](http://github.com/PrismJS/prism/commit/a0127eb)]
* __Show Language__:
	* Add gulp task to build languages map in Show language plugin (Fix [#671](http://github.com/PrismJS/prism/issues/671)) [[`39bd827`](http://github.com/PrismJS/prism/commit/39bd827)]
	* Add reset styles to prevent bug in Coy theme ([#703](http://github.com/PrismJS/prism/issues/703)) [[`08dd500`](http://github.com/PrismJS/prism/commit/08dd500)]

### Other changes

* Fixed link to David Peach article ([#647](http://github.com/PrismJS/prism/issues/647)) [[`3f679f8`](http://github.com/PrismJS/prism/commit/3f679f8)]
* Added `complete` hook, which runs even when no grammar is found [[`e58b6c0`](http://github.com/PrismJS/prism/commit/e58b6c0), [`fd54995`](http://github.com/PrismJS/prism/commit/fd54995)]
* Added test suite runner ([#588](http://github.com/PrismJS/prism/issues/588)) [[`956cd85`](http://github.com/PrismJS/prism/commit/956cd85)]
* Added tests for every components
* Added `.gitattributes` to prevent line ending changes in test files [[`45ca8c8`](http://github.com/PrismJS/prism/commit/45ca8c8)]
* Split plugins into 3 columns on Download page [[`a88936a`](http://github.com/PrismJS/prism/commit/a88936a)]
* Removed comment in components.js to make it easier to parse as JSON ([#679](http://github.com/PrismJS/prism/issues/679)) [[`2cb1326`](http://github.com/PrismJS/prism/commit/2cb1326)]
* Updated README.md [[`1388256`](http://github.com/PrismJS/prism/commit/1388256)]
* Updated documentation since the example was not relevant any more [[`80aedb2`](http://github.com/PrismJS/prism/commit/80aedb2)]
* Fixed inline style for Coy theme [[`52829b3`](http://github.com/PrismJS/prism/commit/52829b3)]
* Prevent errors in nodeJS ([#754](http://github.com/PrismJS/prism/issues/754)) [[`9f5c93c`](http://github.com/PrismJS/prism/commit/9f5c93c), [`0356c58`](http://github.com/PrismJS/prism/commit/0356c58)]
* Explicitly make the Worker close itself after highlighting, so that users have control on this behaviour when directly using Prism inside a Worker. Fix [#492](http://github.com/PrismJS/prism/issues/492) [[`e42a228`](http://github.com/PrismJS/prism/commit/e42a228)]
* Added some language aliases: js for javascript, xml, html, mathml and svg for markup [[`2f9fe1e`](http://github.com/PrismJS/prism/commit/2f9fe1e)]
* Download page: Add a "Select all" checkbox ([#561](http://github.com/PrismJS/prism/issues/561)) [[`9a9020b`](http://github.com/PrismJS/prism/commit/9a9020b)]
* Download page: Don't add semicolon unless needed in generated code. Fix [#273](http://github.com/PrismJS/prism/issues/273) [[`5a5eec5`](http://github.com/PrismJS/prism/commit/5a5eec5)]
* Add language counter on homepage [[`889cda5`](http://github.com/PrismJS/prism/commit/889cda5)]
* Improve performance by doing more work in the worker [[`1316abc`](http://github.com/PrismJS/prism/commit/1316abc)]
* Replace Typeplate with SitePoint on homepage. Fix [#774](http://github.com/PrismJS/prism/issues/774) [[`0c54308`](http://github.com/PrismJS/prism/commit/0c54308)]
* Added basic `.editorconfig` [[`c48f55d`](http://github.com/PrismJS/prism/commit/c48f55d)]

---

## 1.0.1 (2015-07-26)

### New components

* __Brainfuck__ ([#611](http://github.com/PrismJS/prism/issues/611)) [[`3ede718`](http://github.com/PrismJS/prism/commit/3ede718)]
* __Keyman__ ([#609](http://github.com/PrismJS/prism/issues/609)) [[`2698f82`](http://github.com/PrismJS/prism/commit/2698f82), [`e9936c6`](http://github.com/PrismJS/prism/commit/e9936c6)]
* __Makefile__ ([#610](http://github.com/PrismJS/prism/issues/610)) [[`3baa61c`](http://github.com/PrismJS/prism/commit/3baa61c)]
* __Sass (Sass)__ (fix [#199](http://github.com/PrismJS/prism/issues/199)) [[`b081804`](http://github.com/PrismJS/prism/commit/b081804)]
* __VHDL__ ([#595](http://github.com/PrismJS/prism/issues/595)) [[`43e6157`](http://github.com/PrismJS/prism/commit/43e6157)]

### Updated components

* __ActionScript__:
	* Fix ! operator and add ++ and -- as whole operators [[`6bf0794`](http://github.com/PrismJS/prism/commit/6bf0794)]
	* Fix XML highlighting [[`90257b0`](http://github.com/PrismJS/prism/commit/90257b0)]
	* Update examples to add inline XML [[`2c1626a`](http://github.com/PrismJS/prism/commit/2c1626a), [`3987711`](http://github.com/PrismJS/prism/commit/3987711)]
* __Apache Configuration__:
	* Don't include the spaces in directive-inline [[`e87efd8`](http://github.com/PrismJS/prism/commit/e87efd8)]
* __AppleScript__:
	* Allow one level of nesting in block comments [[`65894c5`](http://github.com/PrismJS/prism/commit/65894c5)]
	* Removed duplicates between operators and keywords [[`1ec5a81`](http://github.com/PrismJS/prism/commit/1ec5a81)]
	* Removed duplicates between keywords and classes [[`e8d09f6`](http://github.com/PrismJS/prism/commit/e8d09f6)]
	* Move numbers up so they are not broken by operator pattern [[`66dac31`](http://github.com/PrismJS/prism/commit/66dac31)]
* __ASP.NET__:
	* Prevent Markup tags from breaking ASP tags + fix MasterType directive [[`1f0a336`](http://github.com/PrismJS/prism/commit/1f0a336)]
* __AutoHotkey__:
	* Allow tags (labels) to be highlighted at the end of the code [[`0a1fc4b`](http://github.com/PrismJS/prism/commit/0a1fc4b)]
	* Match all operators + add comma to punctuation [[`f0ccb1b`](http://github.com/PrismJS/prism/commit/f0ccb1b)]
	* Removed duplicates in keywords lists [[`fe0a068`](http://github.com/PrismJS/prism/commit/fe0a068)]
* __Bash__:
	* Simplify comment regex [[`2700981`](http://github.com/PrismJS/prism/commit/2700981)]
	* Removed duplicates in keywords + removed unneeded parentheses [[`903b8a4`](http://github.com/PrismJS/prism/commit/903b8a4)]
* __C__:
	* Removed string pattern (inherited from C-like) [[`dcce1a7`](http://github.com/PrismJS/prism/commit/dcce1a7)]
	* Better support for macro statements [[`4868635`](http://github.com/PrismJS/prism/commit/4868635)]
* __C#__:
	* Fix preprocessor pattern [[`86311f5`](http://github.com/PrismJS/prism/commit/86311f5)]
* __C++__:
	* Removed delete[] and new[] broken keywords [[`42fbeef`](http://github.com/PrismJS/prism/commit/42fbeef)]
* __C-like__:
	* Removed unused 'ignore' pattern [[`b6535dd`](http://github.com/PrismJS/prism/commit/b6535dd)]
	* Use look-ahead instead of inside to match functions [[`d4194c9`](http://github.com/PrismJS/prism/commit/d4194c9)]
* __CoffeeScript__:
	* Prevent strings from ending with a backslash [[`cb6b824`](http://github.com/PrismJS/prism/commit/cb6b824)]
* __CSS__:
	* Highlight parentheses as punctuation [[`cd0273e`](http://github.com/PrismJS/prism/commit/cd0273e)]
	* Improved highlighting of at-rules [[`e254088`](http://github.com/PrismJS/prism/commit/e254088)]
	* Improved URL and strings [[`901812c`](http://github.com/PrismJS/prism/commit/901812c)]
	* Selector regexp should not include last spaces before brace [[`f2e2718`](http://github.com/PrismJS/prism/commit/f2e2718)]
	* Handle \r\n [[`15760e1`](http://github.com/PrismJS/prism/commit/15760e1)]
* __Eiffel__:
	* Fix string patterns order + fix /= operator [[`7d1b8d7`](http://github.com/PrismJS/prism/commit/7d1b8d7)]
* __Erlang__:
	* Fixed quoted functions, quoted atoms, variables and <= operator [[`fa286aa`](http://github.com/PrismJS/prism/commit/fa286aa)]
* __Fortran__:
	* Improved pattern for comments inside strings [[`40ae215`](http://github.com/PrismJS/prism/commit/40ae215)]
	* Fixed order in keyword pattern [[`8a6d32d`](http://github.com/PrismJS/prism/commit/8a6d32d)]
* __Handlebars__:
	* Support blocks with dashes ([#587](http://github.com/PrismJS/prism/issues/587)) [[`f409b13`](http://github.com/PrismJS/prism/commit/f409b13)]
* __JavaScript__:
	* Added support for 'y' and 'u' ES6 JavaScript regex flags ([#596](http://github.com/PrismJS/prism/issues/596)) [[`5d99957`](http://github.com/PrismJS/prism/commit/5d99957)]
	* Added support for missing ES6 keywords in JavaScript ([#596](http://github.com/PrismJS/prism/issues/596)) [[`ca68b87`](http://github.com/PrismJS/prism/commit/ca68b87)]
	* Added `async` and `await` keywords ([#575](http://github.com/PrismJS/prism/issues/575)) [[`5458cec`](http://github.com/PrismJS/prism/commit/5458cec)]
	* Added support for Template strings + interpolation [[`04f72b1`](http://github.com/PrismJS/prism/commit/04f72b1)]
	* Added support for octal and binary numbers ([#597](http://github.com/PrismJS/prism/issues/597)) [[`a8aa058`](http://github.com/PrismJS/prism/commit/a8aa058)]
	* Improve regex performance of C-like strings and JS regexps [[`476cbf4`](http://github.com/PrismJS/prism/commit/476cbf4)]
* __Markup__:
	* Allow non-ASCII chars in tag names and attributes (fix [#585](http://github.com/PrismJS/prism/issues/585)) [[`52fd55e`](http://github.com/PrismJS/prism/commit/52fd55e)]
	* Optimized tag's regexp so that it stops crashing on large unclosed tags [[`75452ba`](http://github.com/PrismJS/prism/commit/75452ba)]
	* Highlight single quotes in attr-value as punctuation [[`1ebcb8e`](http://github.com/PrismJS/prism/commit/1ebcb8e)]
	* Doctype and prolog can be multi-line [[`c19a238`](http://github.com/PrismJS/prism/commit/c19a238)]
* __Python__:
	* Added highlighting for function declaration ([#601](http://github.com/PrismJS/prism/issues/601)) [[`a88aae8`](http://github.com/PrismJS/prism/commit/a88aae8)]
	* Fixed wrong highlighting of variables named a, b, c... f ([#601](http://github.com/PrismJS/prism/issues/601)) [[`a88aae8`](http://github.com/PrismJS/prism/commit/a88aae8)]
* __Ruby__:
	* Added support for string interpolation [[`c36b123`](http://github.com/PrismJS/prism/commit/c36b123)]
* __Scss__:
	* Fixed media queries highlighting [[`bf8e032`](http://github.com/PrismJS/prism/commit/bf8e032)]
	* Improved highlighting inside at-rules [[`eef4248`](http://github.com/PrismJS/prism/commit/eef4248)]
	* Match placeholders inside selectors (fix [#238](http://github.com/PrismJS/prism/issues/238)) [[`4e42e26`](http://github.com/PrismJS/prism/commit/4e42e26)]
* __Swift__:
	* Update keywords list (fix [#625](http://github.com/PrismJS/prism/issues/625)) [[`88f44a7`](http://github.com/PrismJS/prism/commit/88f44a7)]

### Updated plugins

* __File Highlight__:
	* Allow to specify the highlighting language. Fix [#607](http://github.com/PrismJS/prism/issues/607) [[`8030db9`](http://github.com/PrismJS/prism/commit/8030db9)]
* __Line Highlight__:
	* Fixed incorrect height in IE9 ([#604](http://github.com/PrismJS/prism/issues/604)) [[`f1705eb`](http://github.com/PrismJS/prism/commit/f1705eb)]
	* Prevent errors in IE8 [[`5f133c8`](http://github.com/PrismJS/prism/commit/5f133c8)]

### Other changes

* Removed moot `version` property from `bower.json` ([#594](http://github.com/PrismJS/prism/issues/594)) [[`4693499`](http://github.com/PrismJS/prism/commit/4693499)]
* Added repository to `bower.json` ([#600](http://github.com/PrismJS/prism/issues/600)) [[`8e5ebcc`](http://github.com/PrismJS/prism/commit/8e5ebcc)]
* Added `.DS_Store` to `.gitignore` [[`1707e4e`](http://github.com/PrismJS/prism/commit/1707e4e)]
* Improve test drive page usability. Fix [#591](http://github.com/PrismJS/prism/issues/591) [[`fe60858`](http://github.com/PrismJS/prism/commit/fe60858)]
* Fixed prism-core and prism-file-highlight to prevent errors in IE8 [[`5f133c8`](http://github.com/PrismJS/prism/commit/5f133c8)]
* Add Ubuntu Mono font to font stack [[`ed9d7e3`](http://github.com/PrismJS/prism/commit/ed9d7e3)]

---

## 1.0.0 (2015-05-23)

* First release
* Supported languages:
	* ActionScript
	* Apache Configuration
	* AppleScript
	* ASP.NET (C#)
	* AutoHotkey
	* Bash
	* C
	* C#
	* C++
	* C-like
	* CoffeeScript
	* CSS
	* CSS Extras
	* Dart
	* Eiffel
	* Erlang
	* F#
	* Fortran
	* Gherkin
	* Git
	* Go
	* Groovy
	* Haml
	* Handlebars
	* Haskell
	* HTTP
	* Ini
	* Jade
	* Java
	* JavaScript
	* Julia
	* LaTeX
	* Less
	* LOLCODE
	* Markdown
	* Markup
	* MATLAB
	* NASM
	* NSIS
	* Objective-C
	* Pascal
	* Perl
	* PHP
	* PHP Extras
	* PowerShell
	* Python
	* R
	* React JSX
	* reST
	* Rip
	* Ruby
	* Rust
	* SAS
	* Sass (Scss)
	* Scala
	* Scheme
	* Smalltalk
	* Smarty
	* SQL
	* Stylus
	* Swift
	* Twig
	* TypeScript
	* Wiki markup
	* YAML
* Plugins:
	* Autolinker
	* File Highlight
	* Highlight Keywords
	* Line Highlight
	* Line Numbers
	* Show Invisibles
	* Show Language
	* WebPlatform Docs
