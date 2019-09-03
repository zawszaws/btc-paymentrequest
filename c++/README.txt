Dependencies:
  OpenSSL (library and openssl command-line tool)
  Google Protocol Buffers (library and protoc command-line compiler)

Debian/Ubuntu:
  apt-get install openssl protobuf
OSX MacPorts:
  port install openssl protobuf

To compile:
  make

The Makefile will create a "certificate authority in a box" in ../ca_in_a_box/ and
compile command-line tools:

paymentrequest-create  # Prototype code: create a PaymentRequest message
paymentrequest-verify  # Prototype code: verify a PaymentRequest message


Example usage:
  paymentrequest-create paytoaddress=1BTCorgHwCg6u2YSAWKgS17qUad6kHmtQW memo="Just Testing" amount=11.0 | paymentrequest-dump
