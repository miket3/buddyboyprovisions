<?php

class __Mustache_584855c31c25095b54f3dbc0b2f7452f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!-- Marketing messaging and featurettes ============================ -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Wrap the rest of the page in another container to center all the content. -->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<div class="container marketing">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- Three columns of text below the carousel -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-lg-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<img class="img-circle" src="assets/images/thumanns-50-yr-logo.jpg" alt="Thumann\'s Logo">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Welcome</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $value = $context->find('CompanyName');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' is a top class distributor and offers the complete line of <b>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</b> products for every kind of food establishment: Deli\'s, Markets, Diners, Restaurants, Schools, Hospitals, Corporate cafeterias. First Choice Provisions provides marketing support and training support for all of our clients to promote their commitment to quality. Contact us today for details and pricing.</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.col-lg-4 -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-lg-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<img class="img-circle" src="assets/images/thumanns-toy-truck.jpg" alt="Thumann\'s Truck">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>About Us</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $value = $context->find('CompanyName');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' has been a ';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' brand distributor for over 10 years. We know that “Quality Matters”. Using better ingredients translates into a better product. We work with our clients to ensure customer satisfaction. A happy customer is a returning customer. Contact us and see how we can assist in elevating you to the next level of service, taste, and quality.</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.col-lg-4 -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-lg-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<img class="img-circle" src="assets/images/thumanns-history.jpg" alt="Thumann\'s Historical Image">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>Henry Thumann spoke with authority, because his start had been the humblest of all. Born in Wingst in rural northern Germany in 1910, the youngest of nine children, Heinrich Thumann came to America in 1928 at age 17 and went to work for an uncle who was a butcher in Queens, New York. Before long he took on a dairy delivery route for Borden’s and Kraft. That led to him getting involved for a time in a dairy farm in New Paltz, New York. Quick to learn English and ever enterprising, he mastered the butcher trade and set himself up in business distributing Boar’s Head meat products. On Oct. 27 1940, he married Frieda Tietjen, who had emigrated from Heudorf in southern Germany.';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Boar’s Head, at that time, was strong in New York but had little or no presence in New Jersey. Thumann, by now called Henry, smelled opportunity. “He liked Boar’s Head,” says Bob Sr. “He admired their quality and the way they did business, and he patterned Thumann’s after them.” In 1949, Thumann hung up his shingle in a former dry cleaning establishment in Wallington, in southern Bergen County. His first products were hams, bologna, and liverwurst. ';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Eight years later, Thumann’s Inc. moved to St. Paul’s Avenue in Jersey City, where it remained until moving in 1977 to its current 165,000-square-foot facility on Dell Road in Carlstadt. Sales of its more than 200 products now exceed $100 million a year, and the company is still family-owned.';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'Though the business moved, Henry and Frieda Thumann stayed put in one house on Wilson Avenue in Rutherford, from the mid-1950s until the end of their lives. It was quite a house. Designed by an inventor who worked for the pharmaceutical company Hoffmann-LaRoche, it was huge, clad in limestone, had an elevator, a flat roof intended as a helipad (though it never functioned as such), and built-ins such as a dining room table that descended from the ceiling. (Mrs. Thumann had the table ripped out soon after moving in.) “It was like a castle,” Bob Sr. recalls.';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . 'The Thumanns bought a summer house in the Shore town of Bay Head—Frieda’s pride and joy. Henry’s not so much. He preferred Greenwood Lake, where he wanted to build a house that never got built for lack of family interest. Bob Sr., also not a Shore person, remembers dutifully trudging down to Bay Head, fighting Shore traffic, when his son was young. “Sand gets in your car,” he says. “I can’t stand it.” The Bay Head house is still in the family and is prized, especially by Bob Jr.’s wife, Jackie, and their four children. ';
        $buffer .= "\n";
        $buffer .= $indent . 'Bob Sr. raised his family in Verona. But in 1972, a year after they moved to the town from Belleville, Linda Thumann Burke died at 28. Bob Jr. was 3 years old. Bob Sr. eventually remarried and had a daughter, Sonia, who works at the company, as does his sister Susan. Divorced, he lives in Boonton, which he calls “God’s country. Up in the hills.” </p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.col-lg-4 -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.row -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}