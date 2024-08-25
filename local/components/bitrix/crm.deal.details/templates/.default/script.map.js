{"version":3,"sources":["script.js"],"names":["this","BX","Crm","exports","main_core","main_core_events","ui_tour","_classPrivateMethodInitSpec","obj","privateSet","_checkPrivateRedeclaration","add","_classPrivateFieldInitSpec","privateMap","value","set","privateCollection","has","TypeError","_classPrivateMethodGet","receiver","fn","_onboardingData","WeakMap","_contentContainer","_serviceUrl","_dealDetailManager","_activeDocumentGuide","_getContentContainer","WeakSet","_getButtonsContainer","_processProductTabHint","_createHintToProductTab","_hintToVisibleProductTab","_hintToHiddenProductTab","_hintProductListField","_hintAddDocumentLink","_hintSuccessDealDocumentInTimeline","_createHintToSuccessDocument","DealOnboardingManager","babelHelpers","createClass","key","get","params","classCallCheck","writable","classPrivateFieldSet","onboardingData","contentContainer","serviceUrl","dealDetailManager","processOnboarding","chain","classPrivateFieldGet","step","chainStep","successDealGuideIsOver","_processProductTabHint2","call","_hintProductListField2","_hintAddDocumentLink2","_hintSuccessDealDocumentInTimeline2","_getContentContainer2","_getButtonsContainer2","querySelector","guideText","title","Loc","getMessage","text","isTabButtonVisible","productsTabId","_hintToVisibleProductTab2","_hintToHiddenProductTab2","_createHintToProductTab2","target","guideEvents","arguments","length","undefined","Guide","steps","position","events","onEvents","_this","productsTabButton","getTabMenuItemContainer","productsTabGuide","onClose","userOptions","save","showNextStep","tabsContainer","getTabManager","getTabMenuContainer","windowResizeHandler","close","Event","unbind","window","bind","bindOnce","_this2","moreButton","getMoreButton","spotlight$$1","SpotLight","id","concat","targetElement","autoSave","targetVertex","zIndex","show","container","style","pointerEvents","onOpenMoreMenuHandler","event","eventMoreMenu","getMoreMenu","dealMoreMenu","getTabFromMoreMenu","moreMenuContainer","getMenuContainer","tabHintTimeout","setTimeout","moreMenuClickHandler","productsTabPopup","getPopup","EventEmitter","subscribeOnce","onPopupCloseHandler","popupContainer","getContentContainer","parentNode","showMoreMenu","outOfPopupTimeout","closeMoreMenu","clearTimeout","unsubscribe","subscribe","_this3","buttonsContainer","productListTabListener","_event$data","slicedToArray","data","productListEditor","buttonsPanelListener","activeHint","getActiveHint","productList","products","rowId","Array","firstProductRow","find","row","getModel","isService","getId","showFieldTourHint","ajax","post","ACTION","_this4","documentsListTourListener","sumControlContainer","document","addDocumentButton","settingsButton","dragButton","addDocumentGuide","userCloseHintHandler","closeIcon","_this5","timelineGuideListener","currentStepId","currentSemantics","onHistoryNodeAddedHandler","onCustomEvent","_event$data2","timelineDocsNode","previousNodePos","x","y","documentLinkNodeWatcherId","setInterval","documentLinkNode","nodePos","Dom","getPosition","clearInterval","successDealGuide","_createHintToSuccessDocument2","unsubscribeFromHintClicks","dealContainer","scrollTo","_classPrivateFieldInitSpec$1","_checkPrivateRedeclaration$1","_dealGuid","_dealDetailManager$1","_dealOnboardingManager","_cache","DealManager","Cache","MemoryCache","guid","EntityDetailManager","getContainer","remember","getElementById","getDealDetailManager","enableOnboardingChain","Deal","UI","Tour"],"mappings":"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","file":"script.map.js"}