#!/usr/bin/ruby

require "digest/sha2"

class Bill
  attr_accessor :command
  attr_accessor :accessToken
  attr_accessor :uniqueId
  attr_accessor :comments
  attr_accessor :udf
  attr_accessor :hash
  attr_accessor :returnUrl
  attr_accessor :notificationUrl
  attr_accessor :amount
  attr_accessor :currency

  def to_s
    @accessToken + "|" +
        @uniqueId + "|" +
        @comments + "|" +
        @udf + "|" +
        @returnUrl + "|" +
        @notificationUrl + "|" +
        @currency + "|" +
        @amount.to_s
  end

  def hash(salt)
    str = "#{to_s}|#{salt}"
    Digest::SHA2.new(512).hexdigest(str)
  end

end