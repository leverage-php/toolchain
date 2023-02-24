<?php

return (new PhpCsFixer\Config)
    ->setRiskyAllowed(true)
    ->registerCustomFixers(new PedroTroller\CS\Fixer\Fixers())
    ->setRules([
        '@PSR2' => true,

        #region Alias
        'no_alias_language_construct_call' => true,
        'set_type_to_cast' => true,
        #endregion

        #region Array Notation
        'array_syntax' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        #endregion

        #region Basic
        'braces' => [
            'allow_single_line_anonymous_class_with_empty_body' => true,
            'allow_single_line_closure' => true,
        ],
        #endregion

        #region Casing
        'class_reference_name_casing' => true,
        'integer_literal_case' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_function_type_declaration_casing' => true,
        #endregion

        #region Cast Notation
        'cast_spaces' => true,
        'lowercase_cast' => true,
        'modernize_types_casting' => true,
        'no_short_bool_cast' => true,
        'no_unset_cast' => true,
        'short_scalar_cast' => true,
        #endregion

        #region Class Notation
        'class_attributes_separation' => [
            'elements' => [
                'method' => 'one',
            ],
        ],
        'class_definition' => [
            'inline_constructor_arguments' => false,
            'single_line' => true,
            'space_before_parenthesis' => true,
        ],
        'no_blank_lines_after_class_opening' => true,
        'no_php4_constructor' => true,
        'ordered_class_elements' => [
            'order' => [
                'use_trait',
                'method_abstract',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
            'sort_algorithm' => 'none',
        ],
        'self_accessor' => true,
        'single_class_element_per_statement' => true,
        'visibility_required' => true,
        #endregion

        #region Comment
        'no_empty_comment' => true,
        #endregion

        #region Control Structure
        'control_structure_continuation_position' => true,
        'empty_loop_body' => ['style' => 'braces'],
        'empty_loop_condition' => true,
        'include' => true,
        'no_alternative_syntax' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces' => [
            'namespaces' => true,
        ],
        'no_useless_else' => true,
        'switch_continue_to_break' => true,
        'trailing_comma_in_multiline' => [
            'elements' => [
                'arrays',
                'parameters', // PHP 8
            ],
        ],
        'yoda_style' => true,
        #endregion

        #region Function Notation
        'function_declaration' => [
            'closure_function_spacing' => 'none',
        ],
        'function_typehint_space' => true,
        'implode_call' => true,
        'lambda_not_used_import' => true,
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'nullable_type_declaration_for_default_null_value' => true,
        'return_type_declaration' => true,
        'void_return' => true,
        #endregion

        #region Import
        'fully_qualified_strict_types' => true,
        'global_namespace_import' => true,
        'no_leading_import_slash' => true,
        'no_unneeded_import_alias' => true,
        'no_unused_imports' => true,
        'ordered_imports' => true,
        #endregion

        #region Language Construct
        'declare_equal_normalize' => true,
        'declare_parentheses' => true,
        'is_null' => true,
        'no_unset_on_property' => true,
        'single_space_after_construct' => true,
        #endregion

        #region List Notation
        'list_syntax' => true,
        #endregion

        #region Namespace Notation
        'clean_namespace' => true,
        'no_leading_namespace_whitespace' => true,
        'single_blank_line_before_namespace' => true,
        #endregion

        #region Operator
        'binary_operator_spaces' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'logical_operators' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => [
            'only_booleans' => true,
        ],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'unary_operator_spaces' => true,
        #endregion

        #region PHP Tag
        'blank_line_after_opening_tag' => true,
        'echo_tag_syntax' => true,
        'linebreak_after_opening_tag' => true,
        #endregion

        #region PHPUnit
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => true,
        'php_unit_expectation' => true,
        'php_unit_method_casing' => true,
        'php_unit_namespaced' => true,
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
        ],
        #endregion

        #region PHPDoc
        'align_multiline_comment' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'phpdoc_indent' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
        ],
        'phpdoc_var_without_name' => true,
        'phpdoc_var_annotation_correct_order' => true,
        #endregion

        #region Return Notation
        'no_useless_return' => true,
        #endregion

        #region Semicolon
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls',
        ],
        'no_empty_statement' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => true,
        ],
        #endregion

        #region String Notation
        'explicit_string_variable' => true,
        'single_quote' => true,
        #endregion

        #region Whitespace
        'array_indentation' => true,
        'compact_nullable_typehint' => true,
        'method_chaining_indentation' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
            ],
        ],
        'no_spaces_around_offset' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_whitespace_in_blank_line' => true,
        'types_spaces' => [
            'space' => 'single',
        ],
        #endregion

        #region Custom
        'PedroTroller/line_break_between_method_arguments' => [
            'max-args' => 0,
        ],
        #endregion
    ])
;
