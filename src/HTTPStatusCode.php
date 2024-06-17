<?php
namespace Netonevess\HttpStatusCodesPhp;

enum HTTPStatusCode:int{
    

    /**
     * Continue
     * no reference 
     */
    case Continue = 100;

    /**
     * Switching Protocols
     * no reference 
     */
    case SwitchingProtocols = 101;

    /**
     * Processing
     * no reference 
     */
    case Processing = 102;

    /**
     * Early Hints
     * no reference 
     */
    case EarlyHints = 103;

    /**
     * Unassigned
     * no reference 
     */
    case Unassigned = 104;

    /**
     * OK
     * no reference 
     */
    case OK = 200;

    /**
     * Created
     * no reference 
     */
    case Created = 201;

    /**
     * Accepted
     * no reference 
     */
    case Accepted = 202;

    /**
     * Non-Authoritative Information
     * no reference 
     */
    case NonAuthoritativeInformation = 203;

    /**
     * No Content
     * no reference 
     */
    case NoContent = 204;

    /**
     * Reset Content
     * no reference 
     */
    case ResetContent = 205;

    /**
     * Partial Content
     * no reference 
     */
    case PartialContent = 206;

    /**
     * Multi-Status
     * no reference 
     */
    case MultiStatus = 207;

    /**
     * Already Reported
     * no reference 
     */
    case AlreadyReported = 208;

    /**
     * IM Used
     * no reference 
     */
    case IMUsed = 226;

    /**
     * Multiple Choices
     * no reference 
     */
    case MultipleChoices = 300;

    /**
     * Moved Permanently
     * no reference 
     */
    case MovedPermanently = 301;

    /**
     * Found
     * no reference 
     */
    case Found = 302;

    /**
     * See Other
     * no reference 
     */
    case SeeOther = 303;

    /**
     * Not Modified
     * no reference 
     */
    case NotModified = 304;

    /**
     * Use Proxy
     * no reference 
     */
    case UseProxy = 305;

    /**
     * (Unused)
     * no reference 
     */
    case Unused = 306;

    /**
     * Temporary Redirect
     * no reference 
     */
    case TemporaryRedirect = 307;

    /**
     * Permanent Redirect
     * no reference 
     */
    case PermanentRedirect = 308;

    /**
     * Bad Request
     * no reference 
     */
    case BadRequest = 400;

    /**
     * Unauthorized
     * no reference 
     */
    case Unauthorized = 401;

    /**
     * Payment Required
     * no reference 
     */
    case PaymentRequired = 402;

    /**
     * Forbidden
     * no reference 
     */
    case Forbidden = 403;

    /**
     * Not Found
     * no reference 
     */
    case NotFound = 404;

    /**
     * Method Not Allowed
     * no reference 
     */
    case MethodNotAllowed = 405;

    /**
     * Not Acceptable
     * no reference 
     */
    case NotAcceptable = 406;

    /**
     * Proxy Authentication Required
     * no reference 
     */
    case ProxyAuthenticationRequired = 407;

    /**
     * Request Timeout
     * no reference 
     */
    case RequestTimeout = 408;

    /**
     * Conflict
     * no reference 
     */
    case Conflict = 409;

    /**
     * Gone
     * no reference 
     */
    case Gone = 410;

    /**
     * Length Required
     * no reference 
     */
    case LengthRequired = 411;

    /**
     * Precondition Failed
     * no reference 
     */
    case PreconditionFailed = 412;

    /**
     * Content Too Large
     * no reference 
     */
    case ContentTooLarge = 413;

    /**
     * URI Too Long
     * no reference 
     */
    case URITooLong = 414;

    /**
     * Unsupported Media Type
     * no reference 
     */
    case UnsupportedMediaType = 415;

    /**
     * Range Not Satisfiable
     * no reference 
     */
    case RangeNotSatisfiable = 416;

    /**
     * Expectation Failed
     * no reference 
     */
    case ExpectationFailed = 417;

    /**
     * Misdirected Request
     * no reference 
     */
    case MisdirectedRequest = 421;

    /**
     * Unprocessable Content
     * no reference 
     */
    case UnprocessableContent = 422;

    /**
     * Locked
     * no reference 
     */
    case Locked = 423;

    /**
     * Failed Dependency
     * no reference 
     */
    case FailedDependency = 424;

    /**
     * Too Early
     * no reference 
     */
    case TooEarly = 425;

    /**
     * Upgrade Required
     * no reference 
     */
    case UpgradeRequired = 426;

    /**
     * Precondition Required
     * no reference 
     */
    case PreconditionRequired = 428;

    /**
     * Too Many Requests
     * no reference 
     */
    case TooManyRequests = 429;

    /**
     * Request Header Fields Too Large
     * no reference 
     */
    case RequestHeaderFieldsTooLarge = 431;

    /**
     * Unavailable For Legal Reasons
     * no reference 
     */
    case UnavailableForLegalReasons = 451;

    /**
     * Internal Server Error
     * no reference 
     */
    case InternalServerError = 500;

    /**
     * Not Implemented
     * no reference 
     */
    case NotImplemented = 501;

    /**
     * Bad Gateway
     * no reference 
     */
    case BadGateway = 502;

    /**
     * Service Unavailable
     * no reference 
     */
    case ServiceUnavailable = 503;

    /**
     * Gateway Timeout
     * no reference 
     */
    case GatewayTimeout = 504;

    /**
     * HTTP Version Not Supported
     * no reference 
     */
    case HTTPVersionNotSupported = 505;

    /**
     * Variant Also Negotiates
     * no reference 
     */
    case VariantAlsoNegotiates = 506;

    /**
     * Insufficient Storage
     * no reference 
     */
    case InsufficientStorage = 507;

    /**
     * Loop Detected
     * no reference 
     */
    case LoopDetected = 508;

    /**
     * Not Extended (OBSOLETED)
     * no reference 
     */
    case NotExtended = 510;

    /**
     * Network Authentication Required
     * no reference 
     */
    case NetworkAuthenticationRequired = 511;
}
