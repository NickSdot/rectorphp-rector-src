<?php

declare(strict_types=1);

namespace Rector\ValueObject;

/**
 * @api
 */
final class PhpVersionFeature
{
    /**
     * @var int
     */
    public const PROPERTY_MODIFIER = PhpVersion::PHP_52;

    /**
     * @var int
     */
    public const CONTINUE_TO_BREAK = PhpVersion::PHP_52;

    /**
     * @var int
     */
    public const NO_REFERENCE_IN_NEW = PhpVersion::PHP_53;

    /**
     * @var int
     */
    public const SERVER_VAR = PhpVersion::PHP_53;

    /**
     * @var int
     */
    public const DIR_CONSTANT = PhpVersion::PHP_53;

    /**
     * @var int
     */
    public const ELVIS_OPERATOR = PhpVersion::PHP_53;

    /**
     * @var int
     */
    public const ANONYMOUS_FUNCTION_PARAM_TYPE = PhpVersion::PHP_53;

    /**
     * @var int
     */
    public const NO_ZERO_BREAK = PhpVersion::PHP_54;

    /**
     * @var int
     */
    public const NO_REFERENCE_IN_ARG = PhpVersion::PHP_54;

    /**
     * @var int
     */
    public const SHORT_ARRAY = PhpVersion::PHP_54;

    /**
     * @var int
     */
    public const DATE_TIME_INTERFACE = PhpVersion::PHP_55;

    /**
     * @see https://wiki.php.net/rfc/class_name_scalars
     * @var int
     */
    public const CLASSNAME_CONSTANT = PhpVersion::PHP_55;

    /**
     * @var int
     */
    public const PREG_REPLACE_CALLBACK_E_MODIFIER = PhpVersion::PHP_55;

    /**
     * @var int
     */
    public const EXP_OPERATOR = PhpVersion::PHP_56;

    /**
     * @var int
     */
    public const REQUIRE_DEFAULT_VALUE = PhpVersion::PHP_56;

    /**
     * @var int
     */
    public const SCALAR_TYPES = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const HAS_RETURN_TYPE = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NULL_COALESCE = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const LIST_SWAP_ORDER = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const SPACESHIP = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const DIRNAME_LEVELS = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const CSPRNG_FUNCTIONS = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const THROWABLE_TYPE = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_LIST_SPLIT_STRING = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_BREAK_OUTSIDE_LOOP = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_PHP4_CONSTRUCTOR = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_CALL_USER_METHOD = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_EREG_FUNCTION = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const VARIABLE_ON_FUNC_CALL = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_MKTIME_WITHOUT_ARG = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_EMPTY_LIST = PhpVersion::PHP_70;

    /**
     * @see https://php.watch/versions/8.0/non-static-static-call-fatal-error
     * Deprecated since PHP 7.0
     *
     * @var int
     */
    public const STATIC_CALL_ON_NON_STATIC = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const INSTANCE_CALL = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const NO_MULTIPLE_DEFAULT_SWITCH = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const WRAP_VARIABLE_VARIABLE = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const ANONYMOUS_FUNCTION_RETURN_TYPE = PhpVersion::PHP_70;

    /**
     * @var int
     */
    public const ITERABLE_TYPE = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const VOID_TYPE = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const CONSTANT_VISIBILITY = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const ARRAY_DESTRUCT = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const MULTI_EXCEPTION_CATCH = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const NO_ASSIGN_ARRAY_TO_STRING = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const BINARY_OP_NUMBER_STRING = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const NO_EXTRA_PARAMETERS = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const RESERVED_OBJECT_KEYWORD = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const DEPRECATE_EACH = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const OBJECT_TYPE = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const NO_EACH_OUTSIDE_LOOP = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const DEPRECATE_CREATE_FUNCTION = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const NO_NULL_ON_GET_CLASS = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const INVERTED_BOOL_IS_OBJECT_INCOMPLETE_CLASS = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const RESULT_ARG_IN_PARSE_STR = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const STRING_IN_FIRST_DEFINE_ARG = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const STRING_IN_ASSERT_ARG = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const NO_UNSET_CAST = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const IS_COUNTABLE = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const ARRAY_KEY_FIRST_LAST = PhpVersion::PHP_73;

    /**
     * @var int
     * @see https://php.watch/versions/8.5/array_first-array_last
     */
    public const ARRAY_FIRST_LAST = PhpVersion::PHP_85;

    /**
     * @var int
     */
    public const JSON_EXCEPTION = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const SETCOOKIE_ACCEPT_ARRAY_OPTIONS = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const DEPRECATE_INSENSITIVE_CONSTANT_NAME = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const ESCAPE_DASH_IN_REGEX = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const DEPRECATE_INSENSITIVE_CONSTANT_DEFINE = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const DEPRECATE_INT_IN_STR_NEEDLES = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const SENSITIVE_HERE_NOW_DOC = PhpVersion::PHP_73;

    /**
     * @var int
     */
    public const ARROW_FUNCTION = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const LITERAL_SEPARATOR = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const NULL_COALESCE_ASSIGN = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const TYPED_PROPERTIES = PhpVersion::PHP_74;

    /**
     * @see https://wiki.php.net/rfc/covariant-returns-and-contravariant-parameters
     * @var int
     */
    public const COVARIANT_RETURN = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const ARRAY_SPREAD = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const DEPRECATE_CURLY_BRACKET_ARRAY_STRING = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const DEPRECATE_REAL = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const DEPRECATE_MONEY_FORMAT = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const ARRAY_KEY_EXISTS_TO_PROPERTY_EXISTS = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const FILTER_VAR_TO_ADD_SLASHES = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const CHANGE_MB_STRPOS_ARG_POSITION = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const RESERVED_FN_FUNCTION_NAME = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const REFLECTION_TYPE_GETNAME = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const EXPORT_TO_REFLECTION_FUNCTION = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const DEPRECATE_NESTED_TERNARY = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const DEPRECATE_RESTORE_INCLUDE_PATH = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const DEPRECATE_HEBREVC = PhpVersion::PHP_74;

    /**
     * @var int
     */
    public const UNION_TYPES = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const CLASS_ON_OBJECT = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const STATIC_RETURN_TYPE = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const NO_FINAL_PRIVATE = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const DEPRECATE_REQUIRED_PARAMETER_AFTER_OPTIONAL = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const STATIC_VISIBILITY_SET_STATE = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const NULLSAFE_OPERATOR = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const IS_ITERABLE = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const NULLABLE_TYPE = PhpVersion::PHP_71;

    /**
     * @var int
     */
    public const PARENT_VISIBILITY_OVERRIDE = PhpVersion::PHP_72;

    /**
     * @var int
     */
    public const COUNT_ON_NULL = PhpVersion::PHP_71;

    /**
     * @see https://wiki.php.net/rfc/constructor_promotion
     * @var int
     */
    public const PROPERTY_PROMOTION = PhpVersion::PHP_80;

    /**
     * @see https://wiki.php.net/rfc/attributes_v2
     * @var int
     */
    public const ATTRIBUTES = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const STRINGABLE = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const PHP_TOKEN = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const STR_ENDS_WITH = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const STR_STARTS_WITH = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const STR_CONTAINS = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const GET_DEBUG_TYPE = PhpVersion::PHP_80;

    /**
     * @see https://wiki.php.net/rfc/noreturn_type
     * @var int
     */
    public const NEVER_TYPE = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/variadics
     * @var int
     */
    public const VARIADIC_PARAM = PhpVersion::PHP_56;

    /**
     * @see https://wiki.php.net/rfc/readonly_and_immutable_properties
     * @var int
     */
    public const READONLY_PROPERTY = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/final_class_const
     * @var int
     */
    public const FINAL_CLASS_CONSTANTS = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/enumerations
     * @var int
     */
    public const ENUM = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/match_expression_v2
     * @var int
     */
    public const MATCH_EXPRESSION = PhpVersion::PHP_80;

    /**
     * @see https://wiki.php.net/rfc/non-capturing_catches
     * @var int
     */
    public const NON_CAPTURING_CATCH = PhpVersion::PHP_80;

    /**
     * @see https://www.php.net/manual/en/migration80.incompatible.php#migration80.incompatible.resource2object
     * @var int
     */
    public const PHP8_RESOURCE_TO_OBJECT = PhpVersion::PHP_80;

    /**
     * @see https://wiki.php.net/rfc/lsp_errors
     * @var int
     */
    public const FATAL_ERROR_ON_INCOMPATIBLE_METHOD_SIGNATURE = PhpVersion::PHP_80;

    /**
     * @see https://www.php.net/manual/en/migration81.incompatible.php#migration81.incompatible.resource2object
     * @var int
     */
    public const PHP81_RESOURCE_TO_OBJECT = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/new_in_initializers
     * @var int
     */
    public const NEW_INITIALIZERS = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/pure-intersection-types
     * @var int
     */
    public const INTERSECTION_TYPES = PhpVersion::PHP_81;

    /**
     * @see https://php.watch/versions/8.2/dnf-types
     * @var int
     */
    public const UNION_INTERSECTION_TYPES = PhpVersion::PHP_82;

    /**
     * @see https://wiki.php.net/rfc/array_unpacking_string_keys
     * @var int
     */
    public const ARRAY_SPREAD_STRING_KEYS = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/internal_method_return_types
     * @var int
     */
    public const RETURN_TYPE_WILL_CHANGE_ATTRIBUTE = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/first_class_callable_syntax
     * @var int
     */
    public const FIRST_CLASS_CALLABLE_SYNTAX = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/deprecate_dynamic_properties
     * @var int
     */
    public const DEPRECATE_DYNAMIC_PROPERTIES = PhpVersion::PHP_82;

    /**
     * @see https://wiki.php.net/rfc/readonly_classes
     * @var int
     */
    public const READONLY_CLASS = PhpVersion::PHP_82;

    /**
     * @see https://www.php.net/manual/en/migration83.new-features.php#migration83.new-features.core.readonly-modifier-improvements
     * @var int
     */
    public const READONLY_ANONYMOUS_CLASS = PhpVersion::PHP_83;

    /**
     * @see https://wiki.php.net/rfc/mixed_type_v2
     * @var int
     */
    public const MIXED_TYPE = PhpVersion::PHP_80;

    /**
     * @var int
     */
    public const DEPRECATE_NULL_ARG_IN_STRING_FUNCTION = PhpVersion::PHP_81;

    /**
     * @see https://wiki.php.net/rfc/remove_utf8_decode_and_utf8_encode
     * @var int
     */
    public const DEPRECATE_UTF8_DECODE_ENCODE_FUNCTION = PhpVersion::PHP_82;

    /**
     * @see https://www.php.net/manual/en/filesystemiterator.construct
     * @var int
     */
    public const FILESYSTEM_ITERATOR_SKIP_DOTS = PhpVersion::PHP_82;

    /**
     * @see https://wiki.php.net/rfc/null-false-standalone-types
     * @see https://wiki.php.net/rfc/true-type
     *
     * @var int
     */
    public const NULL_FALSE_TRUE_STANDALONE_TYPE = PhpVersion::PHP_82;

    /**
     * @see https://wiki.php.net/rfc/redact_parameters_in_back_traces
     * @var int
     */
    public const SENSITIVE_PARAMETER_ATTRIBUTE = PhpVersion::PHP_82;

    /**
     * @see https://wiki.php.net/rfc/deprecate_dollar_brace_string_interpolation
     * @var int
     */
    public const DEPRECATE_VARIABLE_IN_STRING_INTERPOLATION = PhpVersion::PHP_82;

    /**
     * @see https://wiki.php.net/rfc/marking_overriden_methods
     * @var int
     */
    public const OVERRIDE_ATTRIBUTE = PhpVersion::PHP_83;

    /**
     * @see https://wiki.php.net/rfc/typed_class_constants
     * @var int
     */
    public const TYPED_CLASS_CONSTANTS = PhpVersion::PHP_83;

    /**
     * @see https://wiki.php.net/rfc/dynamic_class_constant_fetch
     * @var int
     */
    public const DYNAMIC_CLASS_CONST_FETCH = PhpVersion::PHP_83;

    /**
     * @see https://wiki.php.net/rfc/deprecate-implicitly-nullable-types
     * @var int
     */
    public const DEPRECATE_IMPLICIT_NULLABLE_PARAM_TYPE = PhpVersion::PHP_84;

    /**
     * @see https://wiki.php.net/rfc/new_without_parentheses
     * @var int
     */
    public const NEW_METHOD_CALL_WITHOUT_PARENTHESES = PhpVersion::PHP_84;

    /**
     * @see https://wiki.php.net/rfc/correctly_name_the_rounding_mode_and_make_it_an_enum
     * @var int
     */
    public const ROUNDING_MODES = PhpVersion::PHP_84;

    /**
     * @see https://php.watch/versions/8.4/csv-functions-escape-parameter
     * @var int
     */
    public const REQUIRED_ESCAPE_PARAMETER = PhpVersion::PHP_84;

    /**
     * @see https://www.php.net/manual/en/migration83.deprecated.php#migration83.deprecated.ldap
     * @var int
     */
    public const DEPRECATE_HOST_PORT_SEPARATE_ARGS = PhpVersion::PHP_83;

    /**
     * @see https://www.php.net/manual/en/migration83.deprecated.php#migration83.deprecated.core.get-class
     * @see https://php.watch/versions/8.3/get_class-get_parent_class-parameterless-deprecated
     * @var int
     */
    public const DEPRECATE_GET_CLASS_WITHOUT_ARGS = PhpVersion::PHP_83;

    /**
     * @see https://wiki.php.net/rfc/deprecated_attribute
     * @var int
     */
    public const DEPRECATED_ATTRIBUTE = PhpVersion::PHP_84;

    /**
     * @see https://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
     * @var int
     */
    public const ARRAY_FIND = PhpVersion::PHP_84;

    /**
     * @see https://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
     * @var int
     */
    public const ARRAY_FIND_KEY = PhpVersion::PHP_84;

    /**
     * @see https://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
     * @var int
     */
    public const ARRAY_ALL = PhpVersion::PHP_84;

    /**
     * @see https://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
     * @var int
     */
    public const ARRAY_ANY = PhpVersion::PHP_84;
}
