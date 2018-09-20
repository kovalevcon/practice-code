def nico(key, message):

    length_key, len_msg = len(key), len(message)
    # get array new key position
    keys = [''.join(sorted(key)).find(x) for x in key]
    # add need some spaces to end of message
    message += (" " * (length_key - (len_msg % length_key) if len_msg % length_key != 0 else 0))
    # slice message by length key
    slice_messages = [message[start:start + length_key] for start in range(0, len(message), length_key)]

    new_message = ""
    for values in slice_messages:
        # sort dict by key and concat to new message
        new_message += "".join((x[1]) for x in sorted(dict(zip(keys, values)).items()))

    return new_message


print(nico("crazy", "secretinformation"))  # "cseerntiofarmit on  "