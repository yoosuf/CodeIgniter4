<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
		->in('system');

return Symfony\CS\Config\Config::create()
		->level(Symfony\CS\FixerInterface::NONE_LEVEL)
		->fixers(array(
			'psr0',
			'encoding',
			'short_tag',
			'braces',
			'eof_ending',
			'line_after_namespace',
			'linefeed',
			'lowercase_constants',
			'lowercase_keywords',
			'method_argument_space',
			'parenthesis',
			'php_closing_tag',
			'single_line_after_imports',
			'trailing_spaces',
			'visibility',
			'array_element_no_space_before_comma',
			'array_element_white_space_after_comma',
			'concat_without_spaces',
			'double_arrow_multiline_whitespaces',
			'duplicate_semicolon',
			'function_typehint_space',
			'include',
			'multiline_array_trailing_comma',
			'no_empty_lines_after_phpdocs',
			'object_operator',
			'operators_spaces',
			'phpdoc_indent',
			'phpdoc_no_empty_return',
			'phpdoc_params',
			'phpdoc_scalar',
			'phpdoc_separation',
			'phpdoc_to_comment',
			'phpdoc_trim',
			'phpdoc_type_to_var',
			'phpdoc_types',
			'print_to_echo',
			'remove_leading_slash_use',
			'remove_lines_between_uses',
			'return',
			'single_array_no_trailing_comma',
			'spaces_before_semicolon',
			'standardize_not_equal',
			'ternary_spaces',
			'trim_array_spaces',
			'unary_operators_spaces',
			'unused_use',
			'whitespacy_lines',
			'align_double_arrow',
			'align_equals',
			'logical_not_operators_with_successor_space',
			'multiline_spaces_before_semicolon',
			'no_blank_lines_before_namespace',
			'ordered_use',
			'phpdoc_order',
			'short_array_syntax',
		))
		->finder($finder);