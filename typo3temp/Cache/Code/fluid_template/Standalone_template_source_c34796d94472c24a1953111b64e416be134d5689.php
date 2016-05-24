<?php
class FluidCache_Standalone_template_source_c34796d94472c24a1953111b64e416be134d5689 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'style', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
            <script type="text/javascript">
                var bannerArray = [
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments7['as'] = 'vo';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
                "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments10 = array();
$output11 = '';

$output11 .= 'uploads/pics/';

$output11 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments10['src'] = $output11;
$arguments10['maxWidth'] = '1024';
$arguments10['image'] = NULL;
$arguments10['width'] = NULL;
$arguments10['height'] = NULL;
$arguments10['minWidth'] = NULL;
$arguments10['minHeight'] = NULL;
$arguments10['maxHeight'] = NULL;
$arguments10['treatIdAsReference'] = false;
$arguments10['crop'] = NULL;
$arguments10['absolute'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments10, $renderChildrenClosure12, $renderingContext);

$output9 .= '",
                ';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                ];
            </script>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments13 = array();
$arguments13['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments13['as'] = 'vo';
$arguments13['iteration'] = 'itemIteration';
$arguments13['key'] = '';
$arguments13['reverse'] = false;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments16 = array();
// Rendering Boolean node
$arguments16['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('itemIteration.isFirst');
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments19 = array();
$arguments19['value'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                ';
return $output18;
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
            ';
return $output15;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
        ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments21 = array();
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
            <div class="slider">
                <ul class="bxslider">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments24['as'] = 'vo';
$arguments24['iteration'] = 'itemIteration';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments27 = array();
// Rendering Boolean node
$arguments27['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext));
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                                <div class="slider-background slider-video hide">
                                    <iframe src="fileadmin/templates/frontend/public/video/player.php?src=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output29 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output29 .= '" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                                        <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments36['then'] = '';
$arguments36['else'] = 'hide';
$renderChildrenClosure37 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments38 = array();
$arguments38['value'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '
                                        </div>
                                    ';
return $output35;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '
                                </div>
                            ';
return $output29;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments40 = array();
// Rendering Boolean node
$arguments40['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext));
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments43 = array();
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments46 = array();
$output47 = '';

$output47 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));
$arguments46['src'] = $output47;
$arguments46['maxWidth'] = '1024';
$arguments46['image'] = NULL;
$arguments46['width'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['treatIdAsReference'] = false;
$arguments46['crop'] = NULL;
$arguments46['absolute'] = false;
$renderChildrenClosure51 = function() {return NULL;};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments46, $renderChildrenClosure51, $renderingContext);

$output45 .= '\');">
                                ';
return $output45;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments52 = array();
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output42 .= '
                            ';
return $output42;
};
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments55 = array();
$output56 = '';

$output56 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));
$arguments55['src'] = $output56;
$arguments55['maxWidth'] = '1024';
$arguments55['image'] = NULL;
$arguments55['width'] = NULL;
$arguments55['height'] = NULL;
$arguments55['minWidth'] = NULL;
$arguments55['minHeight'] = NULL;
$arguments55['maxHeight'] = NULL;
$arguments55['treatIdAsReference'] = false;
$arguments55['crop'] = NULL;
$arguments55['absolute'] = false;
$renderChildrenClosure60 = function() {return NULL;};

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments55, $renderChildrenClosure60, $renderingContext);

$output54 .= '\');">
                                ';
return $output54;
};
$arguments40['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output26 .= '
                                &nbsp;
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments61 = array();
// Rendering Boolean node
$arguments61['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext));
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                                    ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper
$arguments64 = array();
$arguments64['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext);
$arguments64['subject'] = NULL;
$arguments64['class'] = NULL;
$arguments64['target'] = NULL;
$arguments64['title'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper

$output63 .= $viewHelper66->initializeArgumentsAndRender();

$output63 .= '
                                ';
return $output63;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output26 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
                                    <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
$arguments70['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments70['then'] = '';
$arguments70['else'] = 'hide';
$renderChildrenClosure71 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments72 = array();
$arguments72['value'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output69 .= '
                                    </div>
                                ';
return $output69;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output26 .= '
                                <div class="img-overly"></div>
                            </div>
                        </li>
                    ';
return $output26;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                </ul>
            </div>
        ';
return $output23;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
            <script type="text/javascript">
                var bannerArray = [
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments75 = array();
$arguments75['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments75['as'] = 'vo';
$arguments75['key'] = '';
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
                "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments78 = array();
$output79 = '';

$output79 .= 'uploads/pics/';

$output79 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments78['src'] = $output79;
$arguments78['maxWidth'] = '1024';
$arguments78['image'] = NULL;
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['minWidth'] = NULL;
$arguments78['minHeight'] = NULL;
$arguments78['maxHeight'] = NULL;
$arguments78['treatIdAsReference'] = false;
$arguments78['crop'] = NULL;
$arguments78['absolute'] = false;
$renderChildrenClosure80 = function() {return NULL;};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments78, $renderChildrenClosure80, $renderingContext);

$output77 .= '",
                ';
return $output77;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                ];
            </script>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments81 = array();
$arguments81['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments81['as'] = 'vo';
$arguments81['iteration'] = 'itemIteration';
$arguments81['key'] = '';
$arguments81['reverse'] = false;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments84 = array();
// Rendering Boolean node
$arguments84['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('itemIteration.isFirst');
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments87 = array();
$arguments87['value'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
                ';
return $output86;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
            ';
return $output83;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output74 .= '
        ';
return $output74;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
            <div class="slider">
                <ul class="bxslider">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments90 = array();
$arguments90['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments90['as'] = 'vo';
$arguments90['iteration'] = 'itemIteration';
$arguments90['key'] = '';
$arguments90['reverse'] = false;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments93 = array();
// Rendering Boolean node
$arguments93['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext));
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
                                <div class="slider-background slider-video hide">
                                    <iframe src="fileadmin/templates/frontend/public/video/player.php?src=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() {return NULL;};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output95 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output95 .= '" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
                                        <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments102['then'] = '';
$arguments102['else'] = 'hide';
$renderChildrenClosure103 = function() {return NULL;};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments104 = array();
$arguments104['value'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
                                        </div>
                                    ';
return $output101;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output95 .= '
                                </div>
                            ';
return $output95;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext));
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments112 = array();
$output113 = '';

$output113 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments114 = array();
$arguments114['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments114['keepQuotes'] = false;
$arguments114['encoding'] = NULL;
$arguments114['doubleEncode'] = true;
$renderChildrenClosure115 = function() {return NULL;};
$value116 = ($arguments114['value'] !== NULL ? $arguments114['value'] : $renderChildrenClosure115());

$output113 .= (!is_string($value116) ? $value116 : htmlspecialchars($value116, ($arguments114['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments114['encoding'] !== NULL ? $arguments114['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments114['doubleEncode']));
$arguments112['src'] = $output113;
$arguments112['maxWidth'] = '1024';
$arguments112['image'] = NULL;
$arguments112['width'] = NULL;
$arguments112['height'] = NULL;
$arguments112['minWidth'] = NULL;
$arguments112['minHeight'] = NULL;
$arguments112['maxHeight'] = NULL;
$arguments112['treatIdAsReference'] = false;
$arguments112['crop'] = NULL;
$arguments112['absolute'] = false;
$renderChildrenClosure117 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments112, $renderChildrenClosure117, $renderingContext);

$output111 .= '\');">
                                ';
return $output111;
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments118 = array();
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output108 .= '
                            ';
return $output108;
};
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments121 = array();
$output122 = '';

$output122 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() {return NULL;};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output122 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));
$arguments121['src'] = $output122;
$arguments121['maxWidth'] = '1024';
$arguments121['image'] = NULL;
$arguments121['width'] = NULL;
$arguments121['height'] = NULL;
$arguments121['minWidth'] = NULL;
$arguments121['minHeight'] = NULL;
$arguments121['maxHeight'] = NULL;
$arguments121['treatIdAsReference'] = false;
$arguments121['crop'] = NULL;
$arguments121['absolute'] = false;
$renderChildrenClosure126 = function() {return NULL;};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments121, $renderChildrenClosure126, $renderingContext);

$output120 .= '\');">
                                ';
return $output120;
};
$arguments106['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output92 .= '
                                &nbsp;
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments127 = array();
// Rendering Boolean node
$arguments127['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext));
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output129 = '';

$output129 .= '
                                    ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper
$arguments130 = array();
$arguments130['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext);
$arguments130['subject'] = NULL;
$arguments130['class'] = NULL;
$arguments130['target'] = NULL;
$arguments130['title'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper');
$viewHelper132->setArguments($arguments130);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper

$output129 .= $viewHelper132->initializeArgumentsAndRender();

$output129 .= '
                                ';
return $output129;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output92 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments133 = array();
// Rendering Boolean node
$arguments133['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
                                    <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments136 = array();
// Rendering Boolean node
$arguments136['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments136['then'] = '';
$arguments136['else'] = 'hide';
$renderChildrenClosure137 = function() {return NULL;};

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments138 = array();
$arguments138['value'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output135 .= '
                                    </div>
                                ';
return $output135;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output92 .= '
                                <div class="img-overly"></div>
                            </div>
                        </li>
                    ';
return $output92;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                </ul>
            </div>
        ';
return $output89;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output140 = '';

$output140 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments141 = array();
$arguments141['name'] = 'Default';
$renderChildrenClosure142 = function() {return NULL;};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper143->setArguments($arguments141);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output140 .= $viewHelper143->initializeArgumentsAndRender();

$output140 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments144 = array();
$arguments144['name'] = 'main';
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments147 = array();
// Rendering Boolean node
$arguments147['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'style', $renderingContext));
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output149 = '';

$output149 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments150 = array();
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
            <script type="text/javascript">
                var bannerArray = [
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments153 = array();
$arguments153['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments153['as'] = 'vo';
$arguments153['key'] = '';
$arguments153['reverse'] = false;
$arguments153['iteration'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
                "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments156 = array();
$output157 = '';

$output157 .= 'uploads/pics/';

$output157 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments156['src'] = $output157;
$arguments156['maxWidth'] = '1024';
$arguments156['image'] = NULL;
$arguments156['width'] = NULL;
$arguments156['height'] = NULL;
$arguments156['minWidth'] = NULL;
$arguments156['minHeight'] = NULL;
$arguments156['maxHeight'] = NULL;
$arguments156['treatIdAsReference'] = false;
$arguments156['crop'] = NULL;
$arguments156['absolute'] = false;
$renderChildrenClosure158 = function() {return NULL;};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments156, $renderChildrenClosure158, $renderingContext);

$output155 .= '",
                ';
return $output155;
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                ];
            </script>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments159 = array();
$arguments159['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments159['as'] = 'vo';
$arguments159['iteration'] = 'itemIteration';
$arguments159['key'] = '';
$arguments159['reverse'] = false;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output161 = '';

$output161 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments162 = array();
// Rendering Boolean node
$arguments162['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('itemIteration.isFirst');
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments165 = array();
$arguments165['value'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
                ';
return $output164;
};

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
            ';
return $output161;
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output152 .= '
        ';
return $output152;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments167 = array();
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output169 = '';

$output169 .= '
            <div class="slider">
                <ul class="bxslider">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments170 = array();
$arguments170['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments170['as'] = 'vo';
$arguments170['iteration'] = 'itemIteration';
$arguments170['key'] = '';
$arguments170['reverse'] = false;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments173 = array();
// Rendering Boolean node
$arguments173['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext));
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output175 = '';

$output175 .= '
                                <div class="slider-background slider-video hide">
                                    <iframe src="fileadmin/templates/frontend/public/video/player.php?src=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments176 = array();
$arguments176['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext);
$arguments176['keepQuotes'] = false;
$arguments176['encoding'] = NULL;
$arguments176['doubleEncode'] = true;
$renderChildrenClosure177 = function() {return NULL;};
$value178 = ($arguments176['value'] !== NULL ? $arguments176['value'] : $renderChildrenClosure177());

$output175 .= (!is_string($value178) ? $value178 : htmlspecialchars($value178, ($arguments176['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments176['encoding'] !== NULL ? $arguments176['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments176['doubleEncode']));

$output175 .= '" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments179 = array();
// Rendering Boolean node
$arguments179['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
                                        <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments182 = array();
// Rendering Boolean node
$arguments182['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments182['then'] = '';
$arguments182['else'] = 'hide';
$renderChildrenClosure183 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments184 = array();
$arguments184['value'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output181 .= '
                                        </div>
                                    ';
return $output181;
};

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output175 .= '
                                </div>
                            ';
return $output175;
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments186 = array();
// Rendering Boolean node
$arguments186['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext));
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output188 = '';

$output188 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments189 = array();
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output191 = '';

$output191 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments192 = array();
$output193 = '';

$output193 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments194 = array();
$arguments194['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments194['keepQuotes'] = false;
$arguments194['encoding'] = NULL;
$arguments194['doubleEncode'] = true;
$renderChildrenClosure195 = function() {return NULL;};
$value196 = ($arguments194['value'] !== NULL ? $arguments194['value'] : $renderChildrenClosure195());

$output193 .= (!is_string($value196) ? $value196 : htmlspecialchars($value196, ($arguments194['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments194['encoding'] !== NULL ? $arguments194['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments194['doubleEncode']));
$arguments192['src'] = $output193;
$arguments192['maxWidth'] = '1024';
$arguments192['image'] = NULL;
$arguments192['width'] = NULL;
$arguments192['height'] = NULL;
$arguments192['minWidth'] = NULL;
$arguments192['minHeight'] = NULL;
$arguments192['maxHeight'] = NULL;
$arguments192['treatIdAsReference'] = false;
$arguments192['crop'] = NULL;
$arguments192['absolute'] = false;
$renderChildrenClosure197 = function() {return NULL;};

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments192, $renderChildrenClosure197, $renderingContext);

$output191 .= '\');">
                                ';
return $output191;
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments198 = array();
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output188 .= '
                            ';
return $output188;
};
$arguments186['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output200 = '';

$output200 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments201 = array();
$output202 = '';

$output202 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments203 = array();
$arguments203['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments203['keepQuotes'] = false;
$arguments203['encoding'] = NULL;
$arguments203['doubleEncode'] = true;
$renderChildrenClosure204 = function() {return NULL;};
$value205 = ($arguments203['value'] !== NULL ? $arguments203['value'] : $renderChildrenClosure204());

$output202 .= (!is_string($value205) ? $value205 : htmlspecialchars($value205, ($arguments203['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments203['encoding'] !== NULL ? $arguments203['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments203['doubleEncode']));
$arguments201['src'] = $output202;
$arguments201['maxWidth'] = '1024';
$arguments201['image'] = NULL;
$arguments201['width'] = NULL;
$arguments201['height'] = NULL;
$arguments201['minWidth'] = NULL;
$arguments201['minHeight'] = NULL;
$arguments201['maxHeight'] = NULL;
$arguments201['treatIdAsReference'] = false;
$arguments201['crop'] = NULL;
$arguments201['absolute'] = false;
$renderChildrenClosure206 = function() {return NULL;};

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments201, $renderChildrenClosure206, $renderingContext);

$output200 .= '\');">
                                ';
return $output200;
};
$arguments186['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output172 .= '
                                &nbsp;
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments207 = array();
// Rendering Boolean node
$arguments207['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext));
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
                                    ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper
$arguments210 = array();
$arguments210['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext);
$arguments210['subject'] = NULL;
$arguments210['class'] = NULL;
$arguments210['target'] = NULL;
$arguments210['title'] = NULL;
$renderChildrenClosure211 = function() {return NULL;};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper');
$viewHelper212->setArguments($arguments210);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper

$output209 .= $viewHelper212->initializeArgumentsAndRender();

$output209 .= '
                                ';
return $output209;
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output172 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments213 = array();
// Rendering Boolean node
$arguments213['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output215 = '';

$output215 .= '
                                    <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments216 = array();
// Rendering Boolean node
$arguments216['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments216['then'] = '';
$arguments216['else'] = 'hide';
$renderChildrenClosure217 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments218 = array();
$arguments218['value'] = NULL;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output215 .= '
                                    </div>
                                ';
return $output215;
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output172 .= '
                                <div class="img-overly"></div>
                            </div>
                        </li>
                    ';
return $output172;
};

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
                </ul>
            </div>
        ';
return $output169;
};

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output149 .= '
    ';
return $output149;
};
$arguments147['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output220 = '';

$output220 .= '
            <script type="text/javascript">
                var bannerArray = [
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments221 = array();
$arguments221['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments221['as'] = 'vo';
$arguments221['key'] = '';
$arguments221['reverse'] = false;
$arguments221['iteration'] = NULL;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output223 = '';

$output223 .= '
                "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments224 = array();
$output225 = '';

$output225 .= 'uploads/pics/';

$output225 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments224['src'] = $output225;
$arguments224['maxWidth'] = '1024';
$arguments224['image'] = NULL;
$arguments224['width'] = NULL;
$arguments224['height'] = NULL;
$arguments224['minWidth'] = NULL;
$arguments224['minHeight'] = NULL;
$arguments224['maxHeight'] = NULL;
$arguments224['treatIdAsReference'] = false;
$arguments224['crop'] = NULL;
$arguments224['absolute'] = false;
$renderChildrenClosure226 = function() {return NULL;};

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments224, $renderChildrenClosure226, $renderingContext);

$output223 .= '",
                ';
return $output223;
};

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
                ];
            </script>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments227 = array();
$arguments227['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments227['as'] = 'vo';
$arguments227['iteration'] = 'itemIteration';
$arguments227['key'] = '';
$arguments227['reverse'] = false;
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output229 = '';

$output229 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments230 = array();
// Rendering Boolean node
$arguments230['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('itemIteration.isFirst');
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output232 = '';

$output232 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments233 = array();
$arguments233['value'] = NULL;
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
                ';
return $output232;
};

$output229 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
            ';
return $output229;
};

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output220 .= '
        ';
return $output220;
};
$arguments147['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output235 = '';

$output235 .= '
            <div class="slider">
                <ul class="bxslider">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments236 = array();
$arguments236['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('field'), 'images', $renderingContext);
$arguments236['as'] = 'vo';
$arguments236['iteration'] = 'itemIteration';
$arguments236['key'] = '';
$arguments236['reverse'] = false;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output238 = '';

$output238 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments239 = array();
// Rendering Boolean node
$arguments239['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext));
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output241 = '';

$output241 .= '
                                <div class="slider-background slider-video hide">
                                    <iframe src="fileadmin/templates/frontend/public/video/player.php?src=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments242 = array();
$arguments242['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'video', $renderingContext);
$arguments242['keepQuotes'] = false;
$arguments242['encoding'] = NULL;
$arguments242['doubleEncode'] = true;
$renderChildrenClosure243 = function() {return NULL;};
$value244 = ($arguments242['value'] !== NULL ? $arguments242['value'] : $renderChildrenClosure243());

$output241 .= (!is_string($value244) ? $value244 : htmlspecialchars($value244, ($arguments242['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments242['encoding'] !== NULL ? $arguments242['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments242['doubleEncode']));

$output241 .= '" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments245 = array();
// Rendering Boolean node
$arguments245['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output247 = '';

$output247 .= '
                                        <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments248 = array();
// Rendering Boolean node
$arguments248['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments248['then'] = '';
$arguments248['else'] = 'hide';
$renderChildrenClosure249 = function() {return NULL;};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments250 = array();
$arguments250['value'] = NULL;
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output247 .= '
                                        </div>
                                    ';
return $output247;
};

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output241 .= '
                                </div>
                            ';
return $output241;
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments252 = array();
// Rendering Boolean node
$arguments252['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext));
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output254 = '';

$output254 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments255 = array();
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output257 = '';

$output257 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments258 = array();
$output259 = '';

$output259 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments260 = array();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments260['keepQuotes'] = false;
$arguments260['encoding'] = NULL;
$arguments260['doubleEncode'] = true;
$renderChildrenClosure261 = function() {return NULL;};
$value262 = ($arguments260['value'] !== NULL ? $arguments260['value'] : $renderChildrenClosure261());

$output259 .= (!is_string($value262) ? $value262 : htmlspecialchars($value262, ($arguments260['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments260['encoding'] !== NULL ? $arguments260['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments260['doubleEncode']));
$arguments258['src'] = $output259;
$arguments258['maxWidth'] = '1024';
$arguments258['image'] = NULL;
$arguments258['width'] = NULL;
$arguments258['height'] = NULL;
$arguments258['minWidth'] = NULL;
$arguments258['minHeight'] = NULL;
$arguments258['maxHeight'] = NULL;
$arguments258['treatIdAsReference'] = false;
$arguments258['crop'] = NULL;
$arguments258['absolute'] = false;
$renderChildrenClosure263 = function() {return NULL;};

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments258, $renderChildrenClosure263, $renderingContext);

$output257 .= '\');">
                                ';
return $output257;
};

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments264 = array();
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output254 .= '
                            ';
return $output254;
};
$arguments252['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output266 = '';

$output266 .= '
                                    <div class="slider-background slider-image" style="background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments267 = array();
$output268 = '';

$output268 .= 'uploads/pics/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments269 = array();
$arguments269['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'image', $renderingContext);
$arguments269['keepQuotes'] = false;
$arguments269['encoding'] = NULL;
$arguments269['doubleEncode'] = true;
$renderChildrenClosure270 = function() {return NULL;};
$value271 = ($arguments269['value'] !== NULL ? $arguments269['value'] : $renderChildrenClosure270());

$output268 .= (!is_string($value271) ? $value271 : htmlspecialchars($value271, ($arguments269['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments269['encoding'] !== NULL ? $arguments269['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments269['doubleEncode']));
$arguments267['src'] = $output268;
$arguments267['maxWidth'] = '1024';
$arguments267['image'] = NULL;
$arguments267['width'] = NULL;
$arguments267['height'] = NULL;
$arguments267['minWidth'] = NULL;
$arguments267['minHeight'] = NULL;
$arguments267['maxHeight'] = NULL;
$arguments267['treatIdAsReference'] = false;
$arguments267['crop'] = NULL;
$arguments267['absolute'] = false;
$renderChildrenClosure272 = function() {return NULL;};

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments267, $renderChildrenClosure272, $renderingContext);

$output266 .= '\');">
                                ';
return $output266;
};
$arguments252['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                                    <div class="slider-background slider-image" style="background-image:url(\'fileadmin/templates/frontend/public/images/banner-default.png\');">
                                ';
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output238 .= '
                                &nbsp;
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments273 = array();
// Rendering Boolean node
$arguments273['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext));
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output275 = '';

$output275 .= '
                                    ';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper
$arguments276 = array();
$arguments276['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'link', $renderingContext);
$arguments276['subject'] = NULL;
$arguments276['class'] = NULL;
$arguments276['target'] = NULL;
$arguments276['title'] = NULL;
$renderChildrenClosure277 = function() {return NULL;};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper');
$viewHelper278->setArguments($arguments276);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper ArminVieweg\Dce\ViewHelpers\TypolinkViewHelper

$output275 .= $viewHelper278->initializeArgumentsAndRender();

$output275 .= '
                                ';
return $output275;
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output238 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments279 = array();
// Rendering Boolean node
$arguments279['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext));
$arguments279['then'] = NULL;
$arguments279['else'] = NULL;
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output281 = '';

$output281 .= '
                                    <div class="banner-description ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments282 = array();
// Rendering Boolean node
$arguments282['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('itemIteration'), 'isFirst', $renderingContext));
$arguments282['then'] = '';
$arguments282['else'] = 'hide';
$renderChildrenClosure283 = function() {return NULL;};

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments284 = array();
$arguments284['value'] = NULL;
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('vo'), 'description', $renderingContext);
};

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output281 .= '
                                    </div>
                                ';
return $output281;
};

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output238 .= '
                                <div class="img-overly"></div>
                            </div>
                        </li>
                    ';
return $output238;
};

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
                </ul>
            </div>
        ';
return $output235;
};

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
';
return $output146;
};

$output140 .= '';

$output140 .= ' ';


return $output140;
}


}
#1464058150    84205     